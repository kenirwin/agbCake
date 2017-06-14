<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="roles form large-9 medium-8 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Add Role') ?></legend>
        <?php
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('convent_id', ['options' => $convents]);
            echo $this->Form->control('role');
            echo $this->Form->control('start_year');
            echo $this->Form->control('end_year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
