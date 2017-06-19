<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArchitecturalImages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Convents
 *
 * @method \App\Model\Entity\ArchitecturalImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArchitecturalImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArchitecturalImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchitecturalImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalImage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArchitecturalImagesTable extends Table
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

        $this->setTable('architectural_images');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Convents', [
            'foreignKey' => 'convent_id',
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
            ->requirePresence('image_type', 'create')
            ->notEmpty('image_type');

        $validator
            ->allowEmpty('image_url');

        $validator
            ->allowEmpty('image_dir');

        $validator
            ->allowEmpty('image');

        $validator
            ->allowEmpty('image_source');

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
        $rules->add($rules->existsIn(['convent_id'], 'Convents'));

        return $rules;
    }
}
