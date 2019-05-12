<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Set[]|\Cake\Collection\CollectionInterface $sets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Set'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Workouts'), ['controller' => 'Workouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Workout'), ['controller' => 'Workouts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sets index large-9 medium-8 columns content">
    <h3><?= __('Sets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exercise_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reps') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('workout_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sets as $set): ?>
            <tr>
                <td><?= $this->Number->format($set->id) ?></td>
                <td><?= $set->has('exercise') ? $this->Html->link($set->exercise->name, ['controller' => 'Exercises', 'action' => 'view', $set->exercise->id]) : '' ?></td>
                <td><?= $this->Number->format($set->reps) ?></td>
                <td><?= $this->Number->format($set->weight) ?></td>
                <td><?= $set->has('workout') ? $this->Html->link($set->workout->name, ['controller' => 'Workouts', 'action' => 'view', $set->workout->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $set->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $set->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $set->id], ['confirm' => __('Are you sure you want to delete # {0}?', $set->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
