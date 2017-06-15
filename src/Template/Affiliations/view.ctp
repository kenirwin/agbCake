<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Affiliation'), ['action' => 'edit', $affiliation->convent_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affiliation'), ['action' => 'delete', $affiliation->convent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliation->convent_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affiliations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Religious Orders'), ['controller' => 'ReligiousOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Religious Order'), ['controller' => 'ReligiousOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="affiliations view large-10 medium-8 columns content">
    <h3><?= h($affiliation->convent_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Convent') ?></th>
            <td><?= $affiliation->has('convent') ? $this->Html->link($affiliation->convent->name, ['controller' => 'Convents', 'action' => 'view', $affiliation->convent->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Religious Order') ?></th>
            <td><?= $affiliation->has('religious_order') ? $this->Html->link($affiliation->religious_order->name, ['controller' => 'ReligiousOrders', 'action' => 'view', $affiliation->religious_order->id]) : '' ?></td>
        </tr>
    </table>
</div>
