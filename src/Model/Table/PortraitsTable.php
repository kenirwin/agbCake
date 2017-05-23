<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Portraits Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Women
 *
 * @method \App\Model\Entity\Portrait get($primaryKey, $options = [])
 * @method \App\Model\Entity\Portrait newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Portrait[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Portrait|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Portrait patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Portrait[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Portrait findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PortraitsTable extends Table
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

        $this->setTable('portraits');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Women', [
            'foreignKey' => 'woman_id',
            'joinType' => 'INNER'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->allowEmpty('painter');

        $validator
            ->allowEmpty('painter_viaf');

        $validator
            ->integer('date_painted')
            ->allowEmpty('date_painted');

        $validator
            ->allowEmpty('date_painted_approx');

        $validator
            ->allowEmpty('notes');

        $validator
            ->allowEmpty('image_file');

        $validator
            ->allowEmpty('image_path_lo');

        $validator
            ->allowEmpty('image_path_hi');

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

        return $rules;
    }
}
