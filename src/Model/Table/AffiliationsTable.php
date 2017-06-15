<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AffiliationsTable extends Table
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

        $this->setTable('affiliations');
        $this->setDisplayField('convent_id');
        $this->setPrimaryKey(['convent_id', 'religious_order_id']);

        $this->belongsTo('Convents', [
            'foreignKey' => 'convent_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ReligiousOrders', [
            'foreignKey' => 'religious_order_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['convent_id'], 'Convents'));
        $rules->add($rules->existsIn(['religious_order_id'], 'ReligiousOrders'));

        return $rules;
    }
}
