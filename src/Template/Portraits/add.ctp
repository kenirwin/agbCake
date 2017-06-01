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
<div class="portraits form large-10 medium-8 columns content">
    <?= $this->Form->create($portrait) ?>
    <fieldset>
        <legend><?= __('Add Portrait') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('painter');
            echo $this->Form->control('painter_viaf');
            echo $this->Form->control('date_painted_approx', ['type'=>'checkbox']);
            echo $this->Form->control('date_painted', ['type' => 'text']);
            echo $this->Form->control('notes');
            echo $this->Form->control('image_filename', ['type'=>'file']);
            echo $this->Form->control('image_path', ['type'=>'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
