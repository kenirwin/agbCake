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
                ['action' => 'delete', $woman->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]
            )
        ?>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="women form large-10 medium-9 columns content">
    <?= $this->Form->create($woman) ?>
    <fieldset>
        <legend><?= __('Edit Woman') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('viaf_url');
            echo $this->Form->control('name_english');
            echo $this->Form->control('name_spanish');
            echo $this->Form->control('name_portuguese');
            echo $this->Form->control('name_other');
            echo $this->Form->control('birth_approx', ['type' => 'checkbox']);
            echo $this->Form->control('birth_year', ['type' => 'text']);
            echo $this->Form->control('birth_place');            
            echo $this->Form->control('death_approx', ['type' => 'checkbox']);
            echo $this->Form->control('death_year', ['type' => 'text']);
            echo $this->Form->control('death_place');            
echo $this->Form->control('binche', ['type' => 'checkbox', 'label' => 'Traveled to Binche']);
echo $this->Form->control('binche_note', ['label' => 'Binche Travel Note']);
echo $this->Form->control('read_diana', ['type' => 'checkbox', 'label' => 'Read the Diana']);
echo $this->Form->control('diana_note', ['label' => 'Diana Note']);
            echo $this->Form->control('related_to');
            echo $this->Form->control('religious_order');
            echo $this->Form->control('notes');
            echo $this->Form->control('sources');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
