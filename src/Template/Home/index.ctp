<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workout[]|\Cake\Collection\CollectionInterface $workouts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Workout'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
<li>
<a href="#">Item 1</a>
<ul class="vertical menu">
<li>
  <a href="#">Item 1A</a>
  <ul class="vertical menu">
    <li><a href="#">Item 1A</a></li>
    <li><a href="#">Item 1B</a></li>
    <li><a href="#">Item 1C</a></li>
    <li><a href="#">Item 1D</a></li>
    <li><a href="#">Item 1E</a></li>
  </ul>
</li>
<li><a href="#">Item 1B</a></li>
</ul>
</li>
<li>
<a href="#">Item 2</a>
<ul class="vertical menu">
<li><a href="#">Item 2A</a></li>
<li><a href="#">Item 2B</a></li>
</ul>
</li>
<li>
<a href="#">Item 3</a>
<ul class="vertical menu">
<li><a href="#">Item 3A</a></li>
<li><a href="#">Item 3B</a></li>
</ul>
</li>
</ul>

  <?= $this->element('exercise_list'); ?>
<div class="workouts index large-9 medium-8 columns content">
    <h3><?= __('Workouts') ?></h3>
    <ul class="side-nav">
      <li><?= $this->Html->link(__('New Workout'), ['controller'=>'Workouts','action' => 'add']) ?></li>
    </ul>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workouts as $workout): ?>
            <tr>
                <td><?= $this->Number->format($workout->id) ?></td>
                <td><?= h($workout->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller'=>'Workouts','action' => 'view', $workout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller'=>'Workouts','action' => 'edit', $workout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller'=>'Workouts','action' => 'delete', $workout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workout->id)]) ?>
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
