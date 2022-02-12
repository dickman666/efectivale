<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailTransports Controller
 *
 * @property \App\Model\Table\EmailTransportsTable $EmailTransports
 */
class EmailTransportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emailTransports = $this->paginate($this->EmailTransports);
        $this->set(compact('emailTransport', 'emailTransports'));
        $this->set('_serialize', ['emailTransports']);
    }

    /**
     * Save method
     *
     * @param string|null $id Email Transport id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function save($id = null)
    {
        $page = __('Editar configuración de correo');
        $emailTransport = $this->EmailTransports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailTransport = $this->EmailTransports->patchEntity($emailTransport, $this->request->data);
            if ($this->EmailTransports->save($emailTransport)) {
                $this->Flash->success(__('Se ha guardado la configuración.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('No se ha guardado la configuración. Por favor, intente nuevamente.'));
            }
        }
        $this->set(compact('emailTransport', 'page'));
        $this->set('_serialize', ['emailTransport']);
    }

}
