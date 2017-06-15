<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Affiliations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Convents
 * @property \Cake\ORM\Association\BelongsTo $ReligiousOrders
 *
 * @method \App\Model\Entity\Affiliation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Affiliation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Affiliation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Affiliation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Affiliation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Affiliation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Affiliation findOrCreate($search, callable $callback = null, $options = [])
 */
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
