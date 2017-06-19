<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="convents form large-10 medium-9 columns content">
    <?= $this->Form->create($convent) ?>
    <fieldset>
        <legend><?= __('Add Convent') ?></legend>
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
            echo $this->Form->control('women._ids', ['options' => $women]);
echo $this->Form->control('religious_orders._ids', ['options' => $religious_orders]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
