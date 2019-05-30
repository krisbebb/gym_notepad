<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise[]|\Cake\Collection\CollectionInterface $exercises
 */
?>

<div class="exercises index large-9 medium-8 columns content">
    <h3 class="activities"><?= __('Exercises') ?></h3>
    <ul class="side-nav">
      <li>  <?= $this->Html->link(__('New Exercise'), ['controller'=>"Exercises",'action' => 'add']) ?></li>
    </ul>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exercises as $exercise): ?>
            <tr>
                <!-- <td><?= $this->Number->format($exercise->id) ?></td> -->
                <td><?= h($exercise->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Exercises','action' => 'view', $exercise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Exercises','action' => 'edit', $exercise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exercises','action' => 'delete', $exercise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id)]) ?>
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
