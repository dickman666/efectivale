<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\Core\Configure;
use Cake\Orm\TableRegistry;
use Cake\Mailer\Email;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    public $components = ['Flash', 'Auth', 'Usermgmt.UserAuth'/*, 'Security', 'Csrf'*/];
    public $helpers = ['Usermgmt.UserAuth', 'Usermgmt.Image', 'Form','Usermgmt.Search'];
    
    /* Override functions */
    public function paginate($object = null, array $settings = []) {
        $sessionKey = sprintf('UserAuth.Search.%s.%s', $this->request['controller'], $this->request['action']);
        if($this->request->session()->check($sessionKey)) {
            $persistedData = $this->request->session()->read($sessionKey);
            if(!empty($persistedData['page_limit'])) {
                $this->paginate['limit'] = $persistedData['page_limit'];
            }
        }
        return parent::paginate($object);
    }


    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        I18n::locale(Configure::read('locale'));
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if(defined("IDIOMA")){
            // Debe poder usarse en otro Lugar.
            I18n::locale(IDIOMA);
        }
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        mb_internal_encoding("UTF-8");
    }


    public function usersList($conditions = []) {
        $conditions = [
            'deleted' => 0,
            'user_group_id !=' => 1,
        ] + $conditions;
        return TableRegistry::get('Users')->find('list', [
            'keyField' => 'id',
            'valueField' => function ($row){
                return $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['clast_name'];
            }
        ])
        ->where($conditions)
        ->order('first_name asc')
        ->toArray();
    }

    public function updateField($model, $set, $where){
        return TableRegistry::get($model)->query()->update()->set($set)->where($where)->execute();
    }

    public function getField($model, $field, $conditions){
        return @TableRegistry::get($model)->find()->select($field)->where($conditions)->first()->{$field};
    }

    /**
     * invertedStatusList function
     * Same funtion in the Orders and OrderSupplies Models
     *
     * @return void
     */
    public function invertedStatusList($model)
    {
        return TableRegistry::get($model)->find('list',  ['keyField' => 'label', 'valueField' => 'id'])->toArray();
    }

    public function getAllSearchParams() {
        return $this->request->session()->read("UserAuth.Search.{$this->request->controller}.{$this->request->action}");
    }

    public function getSearchParam($param) {
        return $this->request->session()->read("UserAuth.Search.{$this->request->controller}.{$this->request->action}." . $param);
    }

    public function setSearchParam($param, $value) {
        return $this->request->session()->write("UserAuth.Search.{$this->request->controller}.{$this->request->action}." . $param, $value);
    }


    public function selectDistinct($table, $field, $conds = [], $contain = []) {
        return array_map(
            function($e) use ($field){
                return $e[$field];
            },
            TableRegistry::get($table)
                ->query()
                ->select($field)
                ->distinct($field)
                ->where($conds)
                ->contain($contain)
                ->hydrate(false)
                ->toArray()
        ) + array(0);
    }

}
