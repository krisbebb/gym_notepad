<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise[]|\Cake\Collection\CollectionInterface $exercises
 */
?>

<div class="sets index large-9 medium-8 columns content">
    <h3 class="activities"><?= __('Sets') ?></h3>
    <ul class="side-nav">
      <li>  <?= $this->Html->link(__('New Set'), ['controller'=>"Sets",'action' => 'add']) ?></li>
    </ul>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exercise') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reps') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('workout_id') ?></th> -->

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sets as $set): ?>
            <tr>
                <!-- <td><?= $this->Number->format($set->id) ?></td> -->
                  <td><?= h($set->date) ?></td>
                <td><?= $set->has('exercise') ? $this->Html->link($set->exercise->name, ['controller' => 'Exercises', 'action' => 'view', $set->exercise->id]) : '' ?></td>
                <td><?= $this->Number->format($set->reps) ?></td>
                <td><?= $this->Number->format($set->weight) ?></td>
                <!-- <td><?= $set->has('workout') ? $this->Html->link($set->workout->name, ['controller' => 'Workouts', 'action' => 'view', $set->workout->id]) : '' ?></td> -->

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sets','action' => 'view', $set->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sets','action' => 'edit', $set->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sets','action' => 'delete', $set->id], ['confirm' => __('Are you sure you want to delete # {0}?', $set->id)]) ?>
                </td>
            </tr>
            <!-- <td class="actions">Actions <?= $this->Html->link(__('View'), ['controller' => 'Sets','action' => 'view', $set->id]) ?>
            <?= $this->Html->link(__('Edit'), ['controller' => 'Sets','action' => 'edit', $set->id]) ?>
            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sets','action' => 'delete', $set->id], ['confirm' => __('Are you sure you want to delete # {0}?', $set->id)]) ?></td> -->
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
