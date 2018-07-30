<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class RolesTable extends Table
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

        $this->setTable('roles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Women', [
            'foreignKey' => 'woman_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Convents', [
            'foreignKey' => 'convent_id',
            'joinType' => 'INNER'
        ]);
	$this->hasOne('ArchitecturalStyles')
	  ->foreignKey('style_id');

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
            ->allowEmpty('role');

        $validator
            ->allowEmpty('start_year');

        $validator
            ->allowEmpty('end_year');
	$validator
	  ->allowEmpty('style_id');

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
        $rules->add($rules->existsIn(['woman_id'], 'Women'));
        $rules->add($rules->existsIn(['convent_id'], 'Convents'));
	$rules->add($rules->existsIn(['style_id'], 'ArchitecturalStyles'));
        return $rules;
    }
}
