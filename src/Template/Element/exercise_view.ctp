<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise[]|\Cake\Collection\CollectionInterface $exercises
 */
?>

<div class="exercises view large-9 medium-8 columns content">
    <h3><?= h($exercise->name) ?></h3>
    <ul class="side-nav">
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $exercise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exercise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id)]) ?> </li>
        <!-- <li><?= $this->Html->link(__('List Exercises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exercise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?> </li> -->
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($exercise->name) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($exercise->id) ?></td>
        </tr> -->
    </table>
    <div class="related">
        <h4><?= __('Related Sets') ?></h4>
        <?php if (!empty($exercise->sets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!-- <th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Reps') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <!-- <th scope="col"><?= __('Workout') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($exercise->sets as $sets): ?>
            <tr>
                <td><?= h($sets->date) ?></td>
                <!-- <td><?= h($sets->exercise_id) ?></td> -->
                <td><?= h($sets->reps) ?></td>
                <td><?= h($sets->weight) ?></td>
                <!-- <td><?= h($sets->workout_id) ?></td> -->
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
