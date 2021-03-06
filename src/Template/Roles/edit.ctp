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
                ['action' => 'delete', $role->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]
            )
        ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="roles form large-10 medium-9 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Edit Role') ?></legend>
        <?php
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('convent_id', ['options' => $convents]);
            echo $this->Form->control('role');
            echo $this->Form->control('start_year');
            echo $this->Form->control('end_year');
            echo $this->Form->control('style_id', ['options' => $styles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
