<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="women form large-9 medium-8 columns content">
    <?= $this->Form->create($woman) ?>
    <fieldset>
        <legend><?= __('Add Woman') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('viaf_url');
            echo $this->Form->control('name_english');
            echo $this->Form->control('name_spanish');
            echo $this->Form->control('name_portuguese');
            echo $this->Form->control('name_other');
            echo $this->Form->control('birth_approx', ['type' => 'checkbox']);
            echo $this->Form->control('birth_year', ['type' => 'text']);
            echo $this->Form->control('death_approx', ['type' => 'checkbox']);
            echo $this->Form->control('death_year', ['type' => 'text']);
            echo $this->Form->control('related_to');
            echo $this->Form->control('religious_order');
            echo $this->Form->control('notes');
            echo $this->Form->control('convents._ids', ['options' => $convents]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
