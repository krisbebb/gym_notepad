<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Set $set
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Workouts'), ['controller' => 'Workouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Workout'), ['controller' => 'Workouts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sets form large-9 medium-8 columns content">
    <?= $this->Form->create($set) ?>
    <fieldset>
        <legend><?= __('Add Set') ?></legend>
        <?php
            echo $this->Form->control('exercise_id', ['options' => $exercises]);
            echo $this->Form->control('reps');
            echo $this->Form->control('weight');
            echo $this->Form->control('workout_id', ['options' => $workouts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
