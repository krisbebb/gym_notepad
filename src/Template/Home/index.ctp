<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workout[]|\Cake\Collection\CollectionInterface $workouts
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
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
</ul> -->

  <?= $this->element('exercise_list'); ?>
  <?= $this->element('workout_list'); ?>
