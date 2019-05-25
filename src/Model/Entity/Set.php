<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Set Entity
 *
 * @property int $id
 * @property int $exercise_id
 * @property int $reps
 * @property int $weight
 * @property int $workout_id
 * @property \Cake\I18n\FrozenTime $date
 *
 * @property \App\Model\Entity\Exercise $exercise
 * @property \App\Model\Entity\Workout $workout
 */
class Set extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'exercise_id' => true,
        'reps' => true,
        'weight' => true,
        'workout_id' => true,
        'date' => true,
        'exercise' => true,
        'workout' => true
    ];
}
