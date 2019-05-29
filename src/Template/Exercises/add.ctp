<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exercise $exercise
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sets'), ['controller' => 'Sets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Set'), ['controller' => 'Sets', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="exercises form large-9 medium-8 columns content">
    <?= $this->Form->create($exercise) ?>
    <fieldset>
        <legend><?= __('Add Exercise') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <!-- <?= $this->Form->button(__('Submit')) ?>  -->
    <div class="input-group-button">
    <input type="submit" class="button" value="Submit">
  </div>
    <?= $this->Form->end() ?>
</div>
