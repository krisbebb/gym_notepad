<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workouts Model
 *
 * @property \App\Model\Table\ExercisesTable|\Cake\ORM\Association\BelongsToMany $Exercises
 *
 * @method \App\Model\Entity\Workout get($primaryKey, $options = [])
 * @method \App\Model\Entity\Workout newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Workout[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workout|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workout saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workout patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Workout[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workout findOrCreate($search, callable $callback = null, $options = [])
 */
class WorkoutsTable extends Table
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

        $this->setTable('workouts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Exercises', [
            'foreignKey' => 'workout_id',
            'targetForeignKey' => 'exercise_id',
            'joinTable' => 'exercises_workouts'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        return $validator;
    }
}
