<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sets Model
 *
 * @property \App\Model\Table\ExercisesTable|\Cake\ORM\Association\BelongsTo $Exercises
 *
 * @method \App\Model\Entity\Set get($primaryKey, $options = [])
 * @method \App\Model\Entity\Set newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Set[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Set|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Set saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Set patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Set[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Set findOrCreate($search, callable $callback = null, $options = [])
 */
class SetsTable extends Table
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

        $this->setTable('sets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Exercises', [
            'foreignKey' => 'exercise_id',
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
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('reps')
            ->requirePresence('reps', 'create')
            ->allowEmptyString('reps', false);

        $validator
            ->nonNegativeInteger('weight')
            ->requirePresence('weight', 'create')
            ->allowEmptyString('weight', false);

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
        $rules->add($rules->existsIn(['exercise_id'], 'Exercises'));

        return $rules;
    }
}
