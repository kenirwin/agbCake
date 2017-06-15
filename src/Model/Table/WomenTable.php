<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class WomenTable extends Table
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

        $this->setTable('women');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Portraits', [
            'foreignKey' => 'woman_id'
        ]);
        $this->hasMany('Roles', [
            'foreignKey' => 'woman_id'
				 ]);
        $this->belongsToMany('Convents', [
				       'through' => 'Roles'
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
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('viaf_url');

        $validator
            ->allowEmpty('name_english');

        $validator
            ->allowEmpty('name_spanish');

        $validator
            ->allowEmpty('name_portuguese');

        $validator
            ->allowEmpty('name_other');

        $validator
            ->integer('birth_approx')
            ->allowEmpty('birth_approx');

        $validator
            ->integer('birth_year')
            ->allowEmpty('birth_year');

        $validator
            ->integer('death_approx')
            ->allowEmpty('death_approx');

        $validator
            ->integer('death_year')
            ->allowEmpty('death_year');

        $validator
            ->allowEmpty('related_to');

        $validator
            ->allowEmpty('religious_order');

        $validator
            ->allowEmpty('notes');

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
