<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workout $workout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">

    <ul data-role="listview">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Workout'), ['action' => 'edit', $workout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Workout'), ['action' => 'delete', $workout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Workouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Workout'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workouts view large-9 medium-8 columns content">
    <h3><?= h($workout->name) ?></h3>
    <table class="vertical-table">

        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($workout->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workout->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sets') ?></h4>
        <?php if (!empty($workout->sets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Exercise Id') ?></th>
                <th scope="col"><?= __('Reps') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Workout Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($workout->sets as $sets): ?>
            <tr>

                <td><?= h($sets->id) ?></td>
                <td><?= h($sets->exercise_id) ?></td>
                <td><?= h($sets->reps) ?></td>
                <td><?= h($sets->weight) ?></td>
                <td><?= h($sets->workout_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sets', 'action' => 'view', $sets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sets', 'action' => 'edit', $sets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sets', 'action' => 'delete', $sets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
