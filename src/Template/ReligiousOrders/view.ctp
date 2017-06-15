<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Religious Order'), ['action' => 'edit', $religiousOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Religious Order'), ['action' => 'delete', $religiousOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $religiousOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Religious Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Religious Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="religiousOrders view large-9 medium-8 columns content">
    <h3><?= h($religiousOrder->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($religiousOrder->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viaf Url') ?></th>
            <td><?= h($religiousOrder->viaf_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($religiousOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($religiousOrder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($religiousOrder->modified) ?></td>
        </tr>
    </table>
</div>