<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $architecturalImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $architecturalImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Architectural Images'), ['action' => 'index']) ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="architecturalImages form large-9 medium-8 columns content">
    <?= $this->Form->create($architecturalImage, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Architectural Image') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('convent_id', ['options' => $convents]);
            echo $this->Form->control('image_type');
            echo $this->Form->control('image_url');
echo $this->Form->control('image_dir', ['type'=>'hidden']);
echo $this->Form->control('image', ['type'=>'file']);
            echo $this->Form->control('image_source');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
