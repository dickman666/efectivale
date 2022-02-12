<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Orm\TableRegistry;
use Cake\Network\Email\Email;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */class ClientesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('clientes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')            ->allowEmpty('id', 'create');
        $validator
            ->requirePresence('nombre', 'create')            ->notEmpty('nombre');
        $validator
            ->requirePresence('apaterno', 'create')            ->notEmpty('apaterno');
        $validator
            ->requirePresence('amaterno', 'create')            ->notEmpty('amaterno');
        $validator
            ->decimal('telefono')            ->requirePresence('telefono', 'create')            ->notEmpty('telefono');
        $validator
            ->email('email')            ->requirePresence('email', 'create')            ->notEmpty('email');
        $validator
            ->integer('visible')            ->allowEmpty('visible');
        return $validator;
    }


    public function NotificacionAdministrador($id) {
        //$this->loadModel('Users');
        $user = TableRegistry::get('Users')->find('all', [
            'fields' => [
                'id',
                'email',
                'first_name'
            ],
            'conditions' => [ 'Users.user_group_id' => 1, 'Users.active' => 1, 'Users.user_status_id' => 1 ]
        ] )->toArray();
        
        foreach ($user as $userEntity) {
        $userId = $userEntity['id'];
        $emailObj = new Email('default');
        $emailObj->emailFormat('html');
        $fromConfig = EMAIL_FROM_ADDRESS;
        $fromNameConfig = EMAIL_FROM_NAME;
        $emailObj->from([$fromConfig=>$fromNameConfig]);
        $emailObj->sender([$fromConfig=>$fromNameConfig]);
        $emailObj->to($userEntity['email']);
        $emailObj->subject(SITE_NAME.': '.__('Notificación de llamada concluída'));
        //$activate_key = $this->getActivationKey($userEntity['email'].$userEntity['password']);
        setlocale(LC_ALL, 'es_MX');
        //$link = Router::url("/activatePassword?ident=$userId&activate=$activate_key", true);
        setlocale(LC_ALL, 'es_MX');
        $body ='
            <div class="page-header">
                <h2>'.__('Hi {0}.', $userEntity['first_name']).'</h2>
                <br/>
            </div>
            <div class="page-header">
                El siguiente cliente fue llamado:<br>
                ID: '.$id['id'].'<br>
                nombre: '.$id['nombre'].'<br>
                Apellido Paterno: '.$id['apaterno'].'<br>
                Apellido Materno: '.$id['amaterno'].'<br>
                Telefono: '.$id['telefono'].'<br>
                Correo: '.$id['email'].'<br><br>
                Este correo se genera automaticamente
                <br/><br/>Gracias
            </div>';

        try {
                $emailObj->template('default');
                $emailObj->viewVars(array('body' => $body));
                $emailObj->send();
        } catch (Exception $ex) {

        } 

    }
}

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    /*
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
    */
}
