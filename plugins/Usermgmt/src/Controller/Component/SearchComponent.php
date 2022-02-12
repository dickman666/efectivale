<?php
namespace Usermgmt\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;

class SearchComponent extends Component {
    public $settings = [];
    public $formData = [];
    public $config = [];
    public $controllerName = '';
    public $actionName = '';
    public $controller;
    public $request;
    public $response;
    public $session;
    public $registry;

    public function __construct(ComponentRegistry $registry, array $config = []) {
        $this->registry = $registry;
        $this->config = $config;
        $controller = $registry->getController();
        $this->controller = $controller;
        $this->request = $controller->request;
        $this->response = $controller->response;
        $this->session = $controller->request->session();
        $this->controllerName = $controller->name;
        $this->actionName = $this->request['action'];
        parent::__construct($registry, $config);
    }

    function initialize(array $config) {
        if(!isset($this->controller->searchFields)) {
            return;
        }
        $this->settings[$this->controllerName] = $this->controller->searchFields;
        if(isset($this->settings[$this->controllerName][$this->actionName])) {
            $settings = $this->settings[$this->controllerName][$this->actionName];
            foreach($settings as $model=>$search) {
                $loadingModel = $model;
                if(strpos($model, '.') !== false) {
                    list($plugin, $model) = explode('.', $model);
                }
                if(!is_object($this->controller->{$model})) {
                    $this->controller->$model = $this->controller->loadModel($loadingModel);
                }
                if(!is_object($this->controller->{$model})) {
                    trigger_error(__('Search model not found: {0}', $model));
                    continue;
                }
                $this->controller->$model->addBehavior('Usermgmt.Searching', $search);
            }
        }
        parent::initialize($config);
    }
    function startup() {
        if(isset($this->settings[$this->controllerName][$this->actionName])) {
            $settings = $this->settings[$this->controllerName][$this->actionName];
            if(!in_array('Usermgmt.Search', $this->controller->helpers)) {
                $this->controller->helpers[] = 'Usermgmt.Search';
            }
            $sessionKey = sprintf('UserAuth.Search.%s.%s', $this->controllerName, $this->actionName);
            if($this->request->is('post') || isset($this->request->data['Usermgmt']['searchFormId'])) {
                $this->formData = $this->request->data;
                $this->session->write($sessionKey, $this->formData);
            } else {
                if($this->session->check($sessionKey)) {
                    $this->formData = $this->session->read($sessionKey);
                }
            }
            if(isset($this->request->data['search_clear']) && $this->request->data['search_clear'] == 1) {
                $this->session->delete($sessionKey);
                $requestdata = $this->request->data;
                $this->request->data = [];
                $this->formData = [];
                if(isset($this->controller->Csrf)) {
                    $csrffield = $this->controller->Csrf->config('field');
                    if(isset($requestdata[$csrffield])) {
                        $this->request->data[$csrffield] = $requestdata[$csrffield];
                    }
                }
            }
            foreach($settings as $model=>$search) {
                if(strpos($model, '.') !== false) {
                    list($plugin, $model) = explode('.', $model);
                }
                $this->controller->$model->setSearchValues($this->formData);
            }
        }
    }
    function applySearch($originalConditions=array()) {
        if(isset($this->settings[$this->controllerName][$this->actionName])) {
            $settings = $this->settings[$this->controllerName][$this->actionName];
            foreach($settings as $model=>$search) {
                if(strpos($model, '.') !== false) {
                    list($plugin, $model) = explode('.', $model);
                }
                $this->controller->$model->setSearchSetting($originalConditions);
                $this->session->write('orgSearchConditions', $originalConditions);
            }
        }
    }
    function beforeRender() {
        if(isset($this->settings[$this->controllerName][$this->actionName])) {
            $settings = $this->settings[$this->controllerName][$this->actionName];
            $viewSearchParams = [];

            foreach($settings as $model=>$fields) {
                if(strpos($model, '.') !== false) {
                    list($plugin, $model) = explode('.', $model);
                }
                if($this->session->check('orgSearchConditions')) {
                    $orgSearchConditions = $this->session->read('orgSearchConditions');
                    $this->session->delete('orgSearchConditions');
                }
                $default = ['type'=>'text', 'value'=>'', 'default'=>null, 'condition'=>'like', 'label'=>'', 'labelImage'=>'', 'labelImageTitle'=>'', 'tagline'=>'', 'adminOnly'=>false, 'model'=>false, 'selector'=>false, 'selectorArguments'=>[], 'inputOptions'=>[], 'searchField'=>null, 'searchFields'=>[], 'searchFunc'=>[], 'options'=>[]];
                foreach($fields as $field=>$settings) {
                    $fields[$field] = array_merge($default, $settings);
                    if(!is_array($fields[$field]['inputOptions'])) {
                        $fields[$field]['inputOptions'] = [$fields[$field]['inputOptions']];
                    }
                }
                foreach($fields as $field=>$settings) {
                    $options = $settings;
                    $fieldName = $field;
                    $fieldModel = $model;
                    if(strpos($field, '.') !== false) {
                        list($fieldModel, $fieldName) = explode('.', $field);
                    }
                    if(isset($orgSearchConditions[$fieldModel.'.'.$fieldName]) && $orgSearchConditions[$fieldModel.'.'.$fieldName] !=-1) {
                        $options['value'] = $orgSearchConditions[$fieldModel.'.'.$fieldName];
                    }
                    if(!empty($this->formData) && isset($this->formData[$fieldModel][$fieldName])) {
                        $options['value'] = $this->formData[$fieldModel][$fieldName];
                    }
                    if(!$options['value'] && $options['default']) {
                        $options['value'] = $options['default'];
                    }
                    switch($options['type']) {
                    case 'select':
                        $selectOptions = [];
                        if(!$options['model']) {
                            $options['model'] = $fieldModel;
                        }
                        $workingModel = TableRegistry::get($options['model']);
                        if($options['selector']) {
                            if(!method_exists($workingModel, $options['selector'])) {
                                trigger_error(__('Selector method {0} not found in model-table {1} for field {2}! and make sure you passed model-table name (if model-table belongs to any plugin then pass plugin-name-model-table) in search fields variable of respective controller', $options['selector'], $options['model'], $fieldName));
                                return;
                            }
                            $selectorName = $options['selector'];
                            if(count($options['selectorArguments'])) {
                                $options['options'] = $workingModel->$selectorName($options['selectorArguments']);
                            } else {
                                $options['options'] = $workingModel->$selectorName();
                            }
                        }
                        break;
                    case 'checkbox':
                        if(!empty($this->formData) && isset($this->formData[$fieldModel][$fieldName])) {
                            $options['checked'] = !!$options['value'];
                        } else if(isset($options['default'])) {
                            $options['checked'] = !!$options['default'];
                        }
                        break;
                    default:
                        continue;
                    }
                    $options['field'] = $fieldName;
                    $viewSearchParams[] = ['name'=>sprintf('%s.%s', $fieldModel, $fieldName), 'options'=>$options];
                }
            }
            $this->controller->set('viewSearchParams', $viewSearchParams);
        }
    }
}
