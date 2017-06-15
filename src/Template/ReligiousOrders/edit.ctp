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
                ['action' => 'delete', $religiousOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $religiousOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Religious Orders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="religiousOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($religiousOrder) ?>
    <fieldset>
        <legend><?= __('Edit Religious Order') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('viaf_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
