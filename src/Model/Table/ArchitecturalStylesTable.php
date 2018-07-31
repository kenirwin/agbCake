<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArchitecturalStyles Model
 *
 * @method \App\Model\Entity\ArchitecturalStyle get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArchitecturalStyle findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArchitecturalStylesTable extends Table
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

        $this->setTable('architectural_styles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
	
	$this->hasMany('Roles',[
				'foreignKey'=>'style_id'
]);
	$this->belongsToMany('Women',[
				      'through'=>'Roles',
				      'foreignKey'=>'style_id'
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
}
