<?php

namespace App\Controller\Efectivale;

use App\Controller\Efectivale\AppController;

use App\Controller\Component\ApisComponent;
use Cake\Network\Response;
use Cake\Network\Email\Email;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\I18n\Time;
use Cake\I18n\I18n; 
use Cake\I18n\Date;


use Cake\Event\Event;



/**

 * Foo Controller

 * @property \Usermgmt\Model\Table\UsersTable $Users

 * @property \App\Model\Table\TareasTable $Tareas

 * @property \App\Model\Table\TareasDetalleTable $TareasDetalle

 * @property \App\Model\Table\InventariosTable $Inventarios

 * @property \App\Model\Table\EstatusGarantiasTable $EstatusGarantias

 */

header('Access-Control-Allow-Origin: *'); // Hack for dev



class EfectivaleController extends AppController

{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');

    }


    public function beforeRender(event $event) {
        $this->setCorsHeaders();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->loadModel('Usermgmt.Users');
        $this->Users->userAuth = $this->UserAuth;
        $this->Auth->allow([ 'agregarCliente']);

        $url = $this->request->here;
        
        if ( ! strpos($url, "login")) {
            $userToken = NULL;
            $userToken = $this->request->header('Token');
            if ( ! $userToken)
                $userToken = $this->request->data('Token');

            //$validatoken = ApisComponent::validaToken($userToken);
            if ( ! empty($validatoken)) {
                $response = [ 'message' => $validatoken ];
               // debug($response); die;
              //  ApisComponent::response($response,200,1);
            }
        }
        

       if ($this->request->is('options')) {
            $this->setCorsHeaders();
            return $this->response;
        }
    }


    private function setCorsHeaders() {
        $this->response = $this->response->cors($this->request)
          ->allowOrigin(['http://localhost:8100', 'capacitor://localhost', 'http://localhost','http://localhost:4200', 'http://localhost:3000'])
          ->allowMethods(['GET', 'POST', 'OPTIONS', 'PUT', 'DELETE'])
          ->allowHeaders(['Content-Type','X-Amz-Date','Authorization','X-Api-Key','Origin','Accept','Access-Control-Allow-Headers','Access-Control-Allow-Methods','Access-Control-Allow-Origin'])
          ->allowCredentials(['false'])
          ->exposeHeaders(['Link'])
          ->maxAge(300)
          ->build();
      }

    public function agregarCliente()

    {


        $requestData = $this->request->data;
        $this->loadModel('Clientes');

        $error = 1;
        if (empty($requestData['nombre']) || empty($requestData['apaterno']) || empty($requestData['amaterno']) || empty($requestData['telefono']) || empty($requestData['email'])) {


                $this->set([
                    'message' => 'Completa los campos',
                    'status' => 500,
                    '_serialize' => [
                        'message', 'status'
                    ]
                ]);

                $error = 0;

        }elseif(!filter_var($requestData['email'], FILTER_VALIDATE_EMAIL)){

            $this->set([
                'message' => 'Correo electrónico no valido',
                'status' => 500,
                '_serialize' => [
                    'message', 'status'
                ]
            ]);
            $error = 0;

        }elseif(!is_numeric($requestData['telefono'])) {

            $this->set([
                'message' => 'Número telefónico debe ser únicamente númerico',
                'status' => 500,
                '_serialize' => [
                    'message', 'status'
                ]
            ]);
            $error = 0;

        }elseif(strlen($requestData['telefono']) > 10 || strlen($requestData['telefono']) < 10){

            $this->set([
                'message' => 'Número telefónico debe ser de 10 digitos',
                'status' => 500,
                '_serialize' => [
                    'message', 'status'
                ]
            ]);
            $error = 0;

        }

        if($error){
            $clientes = $this->Clientes->newEntity();
            $clientes->visible = 1;
            $clientes->email = strip_tags($requestData['email']);
            $clientes->nombre = strip_tags($requestData['nombre']);
            $clientes->apaterno = strip_tags($requestData['apaterno']);
            $clientes->amaterno = strip_tags($requestData['amaterno']);
            $clientes->telefono = strip_tags($requestData['telefono']);

            $this->Clientes->save($clientes);
            //$this->Users->sendCodeMail($user);

            $this->set([
                'message' => 'Datos almacenados correctamente!.',
                'status' => 200,
                '_serialize' => [
                    'message', 'status'
                ]
            ]);


        }

        $this->RequestHandler->renderAs($this, 'json');

    }






}

