<?php
namespace Customers\Controller;

use Customers\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

/**
 * Customers Controller
 *
 * @property \Customers\Model\Table\CustomersTable $Customers
 */
class CustomersController extends AppController
{

    public $helpers = ['Usermgmt.Search'];
    public $paginate = ['limit' => '100'];
    public $components = ['Usermgmt.Search'];

    public $searchFields = [
        'index' => [
            'Customers' => [
                'Customers.title' => [
                    'type' => 'text',
                    'label' => 'Razón Social',
                    'tagline' => '',
                    'conditions' => 'like',
                    'searchFields' => 'Customers.title',
                ],
                'Customers.business_name' => [
                    'type' => 'text',
                    'label' => 'Razón Comercial',
                    'tagline' => '',
                    'conditions' => 'like',
                    'searchFields' => 'Customers.business_name',
                ],
                'Customers.rfc' => [
                    'label' => 'RFC',
                    'tagline' => '',
                    'conditions' => 'LIKE',
                    'searchFields' => 'Customers.rfc',
                ],
                'Customers.customer_status_id' => [
                    'model' => 'Customers.CustomerStatuses',
                    'type' => 'select',
                    'label' => 'Estado',
                    'tagline' => '',
                    'selector' => 'statusList',
                    'conditions' => '=',
                    'searchFields' => 'Customers.customer_status_id',
                    'inputOptions'=>['class'=>'select-simple']
                ],
            ],
        ],
        'view' =>[
            'ordenes_trabajos'=>[
                'ordenes_trabajos.numero_ot' =>[
                    'type' => 'text',
                    'label' => 'Número de OT',
                    'tagline' => '',
                    'conditions' => 'like',
                    'searchFields' => 'ordenes_trabajos.numero_ot',
                ],
                'ordenes_trabajos.equipo_tecnico_fecha_inicio' =>[
                    'type' => 'date',
                    'label' => 'Fecha Inicio',
                    'tagline' => '',
                    'searchFields' => 'ordenes_trabajos.equipo_tecnico_fecha_inicio',
                ],
                'ordenes_trabajos.equipo_tecnico_fecha_fin' =>[
                    'type' => 'date',
                    'label' => 'Fecha Fin',
                    'tagline' => '',
                    'searchFields' => 'ordenes_trabajos.equipo_tecnico_fecha_fin',
                ],
                'ordenes_trabajos.user_id' => [
                    'model' => 'ordenes_trabajos.Users',
                    'type' => 'select',
                    'label' => 'Creado Por',
                    'tagline' => '',                    
                    'conditions' => '=',
                    'searchFields' => 'ordenes_trabajos.user_id',
                    'inputOptions'=>['class'=>'select-simple']
                ],

            ]

        ],
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $page = __d('customers', 'Customers');
        $conditions[] = ['Customers.deleted' => 0];
        $customer = $this->Customers->newEntity();
        $this->paginate = [
            'conditions' => $conditions,
            'contain' => [
                'CustomerCategories',
                'Offices',
                'CustomerTypes',
                'CustomerHeadcounts',
                'Users',
                'CustomerStatuses'
            ],
            'order' => [
                'id' => 'DESC',
            ],
        ];

        $user = $this->UserAuth->getUser();

        $this->Search->applySearch($conditions);
        $customers = $this->paginate($this->Customers);
        $customerCategories = $this->Customers->CustomerCategories->find('list', ['limit' => 200]);
        
        $customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
        $customerHeadcounts = $this->Customers->CustomerHeadcounts->find('list', ['limit' => 200]);

        $this->set(compact(
            'customer',
            'customers',
            'customerCategories',
            'franchises',
            'customerTypes',
            'customerHeadcounts',
            'franquicias'
        ));
        $this->set('_serialize', ['customers']);

        if($this->request->is('ajax')) {
            $this->viewBuilder()->layout('ajax');
            $this->render('Customers.Element/Customers/all_customers');
        }

    }


    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $page = 'Clientes';

        $customer = $this->Customers->get($id, [
            'contain' => [
                'Ubicaciones',
                'CustomerHeadcounts',
                'CustomerCategories',
                'CustomerTypes',
                'Contacts',
                'Users',
                'CustomerStatuses',
            ],
        ]);

        
        $this->set(compact('customer', 'page'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customers->newEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__d('customers', 'The customer has been saved'));
                $this->customerOffices($customer->id, $this->request->data('franchises'));
                if ($this->request->data('create_user')) {
                    $this->createUser($customer);
                }
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__d('customers', 'The customer could not be saved. Please, try again'));
            }
        }
        $customerCategories = $this->Customers->CustomerCategories->find('list', ['limit' => 200]);
        $executives = $this->Customers->Executives->usersList(['user_group_id LIKE' => 6]);
        $franchises = $this->Customers->Franquicias->find('list', ['limit' => 200])->toArray();
        $customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
        $customerHeadcounts = $this->Customers->CustomerHeadcounts->find('list', ['limit' => 200]);
        $franquicias = $this->Customers->Franquicias->find('list', ['limit' => 200, 'conditions' => ['Franquicias.deleted' => false]]);
        $sellers = $this->Customers->Users->usersList();
        $statusList = $this->Customers->CustomerStatuses->statusList(true);
        // $customer->customer_franchises = [ 0 => [$this->UserAuth->getUser()['User']['franquicia_id'] ];

        $this->set(compact(
            'executives',
            'customer',
            'customerCategories',
            'franchises',
            'customerTypes',
            'customerHeadcounts',
            'franquicias',
            'sellers',
            'statusList'
        ));
        $this->set('_serialize', ['customer']);
    }

    /**
     * checktipoFranq method
     *
     * @param string|null $id Franquicia id.
     * @return \Cake\Network\Response|null Redirects to index.
     */

    public function checktipoFranq($id = null){

        $data = TableRegistry::get('Franquicias')
                ->find('all')
                ->contain(['FranquiciasTypes'])
                ->where(['Franquicias.id' => !empty($id) ? $id : 0 ])
                ->first();
        
        if(!empty($data) && strtolower($data['franquicias_type']['name']) == 'maestra'){
            return true;
        }

        return false;
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => ['Franquicias', 'CustomerFranchises']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->data);
            $customer->customer_since = $this->request->data('customer_since');
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__d('customers', 'The customer has been saved.'));
                $this->customerOffices($customer->id, $this->request->data('franchises'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__d('customers', 'The customer could not be saved. Please, try again'));
            }
        }
        $customerCategories = $this->Customers->CustomerCategories->find('list', ['limit' => 200]);
        $franchises = $this->Customers->Franquicias->find('list', ['limit' => 200])->toArray();
        $executives = $this->Customers->Executives->usersList(['user_group_id LIKE' => 6]);
        $customerTypes = $this->Customers->CustomerTypes->find('list', ['limit' => 200]);
        $customerHeadcounts = $this->Customers->CustomerHeadcounts->find('list', ['limit' => 200]);
        $franquicias = $this->Customers->Franquicias->find('list', ['limit' => 200, 'conditions' => ['Franquicias.deleted' => false]]);
        $sellers = $this->Customers->Users->usersList();
        $statusList = $this->Customers->CustomerStatuses->statusList(true);
        $this->set(compact(
            'executives',
            'customer',
            'customerCategories',
            'franchises',
            'customerTypes',
            'franquicias',
            'customerHeadcounts',
            'sellers',
            'statusList'
        ));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $contact = $this->Customers->get($id);
        if ($this->Customers->delete($contact)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again'));
        }
        return $this->redirect($this->referer());
    }

    /**
     * verifyRfc method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|null Redirects to index.
     */
    public function verifyRfc($customerId = 0)
    {
      $conditions = ['rfc' => $this->request->query('rfc')];

      if ($customerId) {
        $conditions['id !='] = $customerId;
      }

      $this->response->body('');

      $customerExists = $this->Customers->exists($conditions);

      $code = $customerExists ? 200 : 404;
      $this->response->statusCode($code);

      return $this->response;
    }

    /**
     * getRfc method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|null Redirects to index.
     */

    public function getRfc(){
        
        if ($this->request->is('ajax')) {

            $val = $this->request->query['val'];

            $conditions = array('Customers.deleted' => false);
            $conditions[] = array('Customers.rfc LIKE' => '%'.$val.'%');           

            $rfc = $this->Customers->find('all',array('conditions'=>$conditions))->group('rfc');

            $data['response'] = $rfc;
            $data['code'] = 100;
            die(json_encode($data));
        }
    }

    /**
     * getCliente method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Network\Response|null Redirects to index.
     */

    public function getCliente($rfc = null){
        
        if ($this->request->is('ajax')) {

            $conditions = ['Customers.deleted' => false];
            $conditions = ['Customers.rfc' => $rfc];   

            $clientes = $this->Customers->find('all', ['conditions' => $conditions])->contain(['CustomerFranchises'])->first();

            $data['response'] = $clientes;
            $data['code'] = 100;
            die(json_encode($data));
        }
    }

    public function getCustomerId($id = null){

        if ($this->request->is('ajax')) {

            $conditions = ['Customers.deleted' => false];
            $conditions = ['Customers.id' => $id];   

            $customer = $this->Customers->find('all', ['conditions' => $conditions])->first();

            $customer->contact_bday = ($customer->contact_bday)? $customer->contact_bday->format('d/m/Y') : '';
            $customer->created = ($customer->created)? $customer->created->format('d/m/Y') : '';

            $this->set(compact('customer'));
            $this->set('_serialize', ['customer']);
        }

    }

    public function verifyOffice( $nameoffice = null, $customer_id = null){

      $response = ['error' => 0];

      $conditions = ['Customers.deleted' => false];

      if($this->request->is('ajax')){

        if(!empty($nameoffice)){

          if(!empty($customer_id)){
            $conditions['Customers.id !='] = $customer_id;
          }
          
          $conditions['Customers.name_office'] = $nameoffice;

          $data = $this->Customers->find('all', ['conditions' => $conditions ])->first();
          if(sizeof($data)){
            $response['error'] = 1;
          }
        }
        die(json_encode($response));
      }
    }

    public function customerOffices($customerId, $franchises){
        $this->loadModel('CustomerFranchises');
        $this->CustomerFranchises
                ->query()
                ->delete()
                ->where(['customer_id' => $customerId])
                ->execute();
        if (!empty($franchises)) {
            foreach ($franchises as $key => $franquiciaId) {
                $customerOffice = $this->CustomerFranchises->newEntity([
                    'customer_id' => $customerId,
                    'franquicia_id' => $franquiciaId,
                ]);
                $this->CustomerFranchises->save($customerOffice);
            }
        }
    }

    public function createUser($customer){

        $this->loadModel('Usermgmt.Users');

        if ( ! $customer->email ) {
            $this->Flash->error(__('El Usuario no se creó porque el email está vacío'));
            return false;
        }

        if ($this->Users->exists([ 'email' => $customer->email ])) {
            $this->Flash->error(__('El Usuario no se creó porque el email ya existe'));
            return false;
        }

        $password = $this->UserAuth->generatePassword();

        $userData = [

            'active' => 1,
            'email_verified' => 1,
            'created_by' => $this->UserAuth->getUserId(),
            'password' => $this->UserAuth->makeHashedPassword($password),

            'customer_id' => $customer->id,
            'email' => $customer->email,
            'position' => 'Administrador',
            'department_id' => 4,
            'franquicia_id' => $this->UserAuth->getUser()['User']['franquicia_id'],
            'user_group_id' => '2',

        ];

        $userEntity = $this->Users->newEntity($userData);

        $userEntity->entrydate = new Time();

        if( $this->Users->save($userEntity) ) {
            $this->Flash->success(__('El Usuario se creó con éxito'));
            $this->Users->sendRegistrationMail($userEntity, $password);
        }

    }

    public function getContactinfo($id = null){
        if ($this->request->is('ajax')) {
            

            $data = $this->Customers->Contacts->find('all', ['conditions'=>['Contacts.id =' => $id]])->first();

            die(json_encode($data));
        }
    }

    public function getUbicacioninfo($id = null){
        if ($this->request->is('ajax')) {
            
            $data = $this->Customers->Ubicaciones->find('all', ['conditions'=>['Ubicaciones.id =' => $id]])->first();

            die(json_encode($data));
        }
    }

    public function addOrdenTrabajo($customer_id = null){

        $options = [
            'contain'=>['Users']
        ];

        $ordenTrabajo = $this->Customers->OrdenesTrabajos->newEntity();
       

        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $ordenTrabajo = $this->Customers->OrdenesTrabajos->patchEntity($ordenTrabajo, $this->request->data);

            $ordenTrabajo->user_id = $this->UserAuth->getUserId();
            $ordenTrabajo->customer_id = $customer_id;
            $ordenTrabajo->orden_trabajo_status_id = 1; 

            
            $ordenTrabajo->fin_prueba = $this->request->data('fin_prueba');
            $ordenTrabajo->equipo_tecnico_fecha_tentativa = $this->request->data('equipo_tecnico_fecha_tentativa');
            $ordenTrabajo->equipo_tecnico_fecha_inicio = $this->request->data('equipo_tecnico_fecha_inicio');
            $ordenTrabajo->equipo_tecnico_fecha_fin = $this->request->data('equipo_tecnico_fecha_fin');

            $ordenTrabajo->equipo_tecnico_hora_tentativa = $this->request->data('equipo_tecnico_hora_tentativa');
            $ordenTrabajo->equipo_tecnico_hora_inicio = $this->request->data('equipo_tecnico_hora_inicio');
            $ordenTrabajo->equipo_tecnico_hora_fin = $this->request->data('equipo_tecnico_hora_fin');

            $ordenTrabajo->ubicacion_empresa_horarios_inicio_acceso = $this->request->data('ubicacion_empresa_horarios_inicio_acceso');
            $ordenTrabajo->ubicacion_empresa_horarios_fin_acceso = $this->request->data('ubicacion_empresa_horarios_fin_acceso');

            if ($this->Customers->OrdenesTrabajos->save($ordenTrabajo)) {

                $ordenTrabajo->numero_ot = 'MTY-OT-'.str_pad($ordenTrabajo->id, 6, '0', STR_PAD_LEFT); 
                $this->Customers->OrdenesTrabajos->save($ordenTrabajo);


                return $this->redirect('/customers/customers/view/'.$customer_id);
                $this->Flash->success('Se guardo la orden de trabajo.');
            }else{
                $this->Flash->error('La orden de trabajo no se pudo guardar. Intentalo de nuevo.');
            }

        }

        $tipoOrdenTrabajos = $this->Customers->OrdenesTrabajos->TipoOrdenTrabajos->find('list')->toArray();
        $tipoOrdenTrabajoOperaciones = $this->Customers->OrdenesTrabajos->TipoOrdenTrabajoOperaciones->find('list')->toArray();

        $tecnicos = $this->Customers->Users->find('list', ['keyField'=>'id', 'valueField' => function ($row){
                return $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['middle_name'];
            }, 'conditions'=>['Users.franquicia_id'=>$this->UserAuth->getUser()['User']['franquicia_id'], 'Users.user_group_id'=>7]])->toArray();

        $contactos = $this->Customers->Contacts->find('list', ['keyField'=>'id', 'valueField' => function ($row){
                return $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['middle_name'];
            }, 'conditions'=>['Contacts.customer_id'=>$customer_id]])->toArray();

        $ubicaciones = $this->Customers->Ubicaciones->find('list', ['conditions'=>['Ubicaciones.customer_id'=>$customer_id]])->toArray();
       
        $this->set(compact('ordenTrabajo', 'customer_id', 'tipoOrdenTrabajos', 'tipoOrdenTrabajoOperaciones', 'tecnicos', 'contactos', 'ubicaciones'));
        //$this->set('_serialize', ['customer']);
    }

    public function selectFranchise($customerId = 0) {
        $franquicias = $this->Customers->Franquicias->find('list');
        if ($this->request->is(['patch', 'post', 'put'])) {
            return $this->redirect('/customers/customers/account-status/' . $this->request->data('customer_id') . '/' . $this->request->data('franquicia_id'));
        }
        $this->set(compact('customerId', 'franquicias'));
    }

    public function accountStatus( $customerId, $franquiciaId ) {
        $file = $this->Customers->accountStatus( $customerId, $franquiciaId );
        $this->response->type('xls');
        $this->response->download(date('Y_m_d') . 'Estado_de_Cuenta.pdf');
        $this->response->file($file);
        return $this->response;
    }
     public function getGeoData()
    {
        //$input : ['cp' | 'estado' | 'ciudad' | 'colonia']
        //$value : criterio de búsqueda
        $input = isset($this->request->data['tipo']) ? $this->request->data['tipo'] : '';
        $value = isset($this->request->data['valor']) ? $this->request->data['valor'] : '';


        $data = [];
        $state = [];
        $city = [];
        $district = [];
        $postal = [];


        $this->loadModel('PostalCodes');

        switch ($input) {
            case 'cp':

                if($this->PostalCodes->find('all')->where(['cp' => $value])->first()) {
                    $state = $this->PostalCodes->find('all')->where(['cp' => $value])->first()->state_id;
                    $city = $this->PostalCodes->find('all')->where(['cp' => $value])
                        ->group('city_id')->find('list',
                            ['keyField' => 'city_id', 'valueField' => 'city_name'])->toArray();
                    $district = $this->PostalCodes->find('all')->where(['cp' => $value])->find('list',
                        ['keyField' => 'id', 'valueField' => 'colony_name'])->toArray();
                    $postal = $value;
                }
                break;
            case 'estado':

                if($this->PostalCodes->find('all')->where(['state_id' => $value])->first()) {
                    $state = $value;
                    $city = $this->PostalCodes->find('all')->where(['state_id' => $value])
                        ->group('city_id')->find('list',
                            ['keyField' => 'city_id', 'valueField' => 'city_name'])->toArray();
                    $district = null;
                    $postal = null;
                }
                break;
            case 'ciudad':
                //$value[0] = ciudad
                //$value[0] = estado
                if($this->PostalCodes->find('all')->where(['city_id' => $value[0]])
                    ->where(['state_id' => $value[1]])->first()) {
                    $district = $this->PostalCodes->find('all')
                        ->where(['city_id' => $value[0]])
                        ->where(['state_id' => $value[1]])
                        ->find('list',
                            ['keyField' => 'id', 'valueField' => 'colony_name'])->toArray();
                    $postal = null;
                }

                break;
            case 'colonia':

                if($this->PostalCodes->find('all')->where(['id' => $value])->first()) {
                    $postal = $this->PostalCodes->find('all')->where(['id' => $value])->first()->cp;
                    $state = $this->PostalCodes->find('all')
                        ->where(['id' => $value])->first()->state_id;
                    $city = $this->PostalCodes->find('list',
                        ['keyField' => 'city_id', 'valueField' => 'city_name'])
                        ->where(['id' => $value])->toArray();
                    $district = $value;
                }
                break;
        }

        $data = ['estado'=>$state, 'ciudad'=> $city,'colonia'=> $district,'cp'=> $postal];

        echo json_encode($data);
        die;
    }


}
