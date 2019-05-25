<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Set $set
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Set'), ['action' => 'edit', $set->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Set'), ['action' => 'delete', $set->id], ['confirm' => __('Are you sure you want to delete # {0}?', $set->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Workouts'), ['controller' => 'Workouts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Workout'), ['controller' => 'Workouts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sets view large-9 medium-8 columns content">
    <h3><?= h($set->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Exercise') ?></th>
            <td><?= $set->has('exercise') ? $this->Html->link($set->exercise->name, ['controller' => 'Exercises', 'action' => 'view', $set->exercise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Workout') ?></th>
            <td><?= $set->has('workout') ? $this->Html->link($set->workout->name, ['controller' => 'Workouts', 'action' => 'view', $set->workout->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($set->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reps') ?></th>
            <td><?= $this->Number->format($set->reps) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($set->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($set->date) ?></td>
        </tr>
    </table>
</div>
