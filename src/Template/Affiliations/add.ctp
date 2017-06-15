<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Religious Orders'), ['controller' => 'ReligiousOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Religious Order'), ['controller' => 'ReligiousOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affiliations form large-9 medium-8 columns content">
    <?= $this->Form->create($affiliation) ?>
    <fieldset>
        <legend><?= __('Add Affiliation') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
