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
                ['action' => 'delete', $portrait->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $portrait->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Portraits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portraits form large-9 medium-8 columns content">
    <?= $this->Form->create($portrait) ?>
    <fieldset>
        <legend><?= __('Edit Portrait') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('painter');
            echo $this->Form->control('painter_viaf');
            echo $this->Form->control('date_painted');
            echo $this->Form->control('date_painted_approx');
            echo $this->Form->control('notes');
            echo $this->Form->control('image_path_lo');
            echo $this->Form->control('image_path_hi');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
