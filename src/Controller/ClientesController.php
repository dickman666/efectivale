<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes */
class ClientesController extends AppController
{

    public $components = ['Usermgmt.Search', 'Usermgmt.UserConnect'];
    /**
     * This controller uses following default pagination values
     *
     * @var array
     */
    public $paginate = [
            'limit'=>25
    ];
    /**
     * This controller uses search filters in following functions for ex index, online function
     *
     * @var array
     */
    public $searchFields = [
            'index'=>[
                    'Usermgmt.Clientes'=>[
                            
                            'Clientes'=>[
                                'type'=>'text',
                                'condition'=>'multiple',
                                'label'=>'Buscar',
                                'tagline'=>'Buscar por nombre, apellido, email',
                                'searchFields'=>['Clientes.nombre', 'Clientes.apaterno', 'Clientes.amaterno', 'Clientes.email'],
                                'inputOptions'=>['style'=>'width:150px;']
                            ],

                    ]

            ]

                            ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cliente = $this->Clientes->newEntity();
        $this->Search->applySearch();
        $clientes = $this->paginate($this->Clientes);
        $dependencies = ['cliente', ];
        $this->set(compact('cliente', 'clientes'));
        $this->set('_serialize', ['clientes']);
        if($this->request->is('ajax')) {
            $this->viewBuilder()->layout('ajax');
            $this->render('/Element/Clientes/cliente');
    }
    }

    public function notificado($id = null)
    {
            $this->request->allowMethod(['post', 'delete']);
            $cliente = $this->Clientes->get($id);
            $cliente['visible'] = 0;
            if($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente llamado!.'));
                $this->Clientes->NotificacionAdministrador($cliente);
            } else {
                $this->Flash->error(__('No se puede almacenar, intente de nuevo.'));
            }

            return $this->redirect(['action' => 'index']);
    }

}
