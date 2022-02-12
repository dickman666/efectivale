<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Currencies Model
 *
 * @property \Cake\ORM\Association\HasMany $FactorajesContractsInvoices
 * @property \Cake\ORM\Association\HasMany $FactorajesContractsInvoicesCopy
 * @property \Cake\ORM\Association\HasMany $FactorajesContractsInvoicesCopy2
 * @property \Cake\ORM\Association\HasMany $FactorajesContractsInvoicesVouchers
 * @property \Cake\ORM\Association\HasMany $FactorajesContractsInvoicesVouchersDetails
 *
 * @method \App\Model\Entity\Currency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Currency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Currency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Currency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Currency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Currency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Currency findOrCreate($search, callable $callback = null)
 */
class CurrenciesTable extends Table
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

        $this->table('currencies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('FactorajesContracts', [
            'foreignKey' => 'currency_id'
        ]);
        $this->hasMany('FactorajesContractsInvoices', [
            'foreignKey' => 'currency_id'
        ]);
        $this->hasMany('FactorajesContractsInvoicesCopy', [
            'foreignKey' => 'currency_id'
        ]);
        $this->hasMany('FactorajesContractsInvoicesCopy2', [
            'foreignKey' => 'currency_id'
        ]);
        $this->hasMany('FactorajesContractsInvoicesVouchers', [
            'foreignKey' => 'currency_id'
        ]);
        $this->hasMany('FactorajesContractsInvoicesVouchersDetails', [
            'foreignKey' => 'currency_id'
        ]);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }

    public function getCurrency($currencyName){
        $currency = $this->find('all',['conditions' => ['Currencies.name'=>$currencyName]])->toArray();
        return $currency;
    }
}
