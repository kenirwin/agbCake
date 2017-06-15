<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ConventsTable extends Table
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

        $this->setTable('convents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
	
	
        $this->hasMany('Roles', [
				 'foreignKey' => 'convent_id'
				 ]);
        $this->belongsToMany('Women', [
				       'through' => 'Roles'

        ]);
	
	$this->hasMany('Affiliations');
	$this->belongsToMany('ReligiousOrders', ['through' => 'Affiliations']);


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
            ->allowEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('name_english');

        $validator
            ->allowEmpty('name_spanish');

        $validator
            ->allowEmpty('name_portuguese');

        $validator
            ->allowEmpty('name_other');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('country');

        $validator
            ->integer('date_founding')
            ->allowEmpty('date_founding');

        $validator
            ->integer('date_closing')
            ->allowEmpty('date_closing');

        $validator
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
