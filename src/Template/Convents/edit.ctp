<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $convent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $convent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('New Convent'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="convents form large-10 medium-9 columns content">
    <?= $this->Form->create($convent) ?>
    <fieldset>
        <legend><?= __('Edit Convent') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_english');
            echo $this->Form->control('name_spanish');
            echo $this->Form->control('name_portuguese');
            echo $this->Form->control('name_other');
            echo $this->Form->control('city');
            echo $this->Form->control('country');
            echo $this->Form->control('date_founding', ['type'=>'text']);
            echo $this->Form->control('date_closing', ['type'=>'text']);
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
$curr_orders = array();
foreach($convent->affiliations as $affil) {
  array_push($curr_orders, $affil->religious_order_id);
}

echo $this->Form->control('religious_orders._ids', array(
						  'multiple'=>'multiple',
						  'type'=> 'select',
						  'value'=> $curr_orders
						  ));

            echo $this->Form->control('notes');
            echo $this->Form->control('sources');
?>
    </fieldset>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
