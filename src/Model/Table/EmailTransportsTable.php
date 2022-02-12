<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailTransports Model
 *
 * @method \App\Model\Entity\EmailTransport get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailTransport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmailTransport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailTransport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailTransport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailTransport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailTransport findOrCreate($search, callable $callback = null)
 */
class EmailTransportsTable extends Table
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

        $this->table('email_transports');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('port')
            ->requirePresence('port', 'create')
            ->notEmpty('port');

        $validator
            ->requirePresence('host', 'create')
            ->notEmpty('host');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->allowEmpty('password');

        $validator
            ->requirePresence('className', 'create')
            ->notEmpty('className');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
