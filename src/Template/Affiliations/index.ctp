<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Affiliation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Religious Orders'), ['controller' => 'ReligiousOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Religious Order'), ['controller' => 'ReligiousOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="affiliations index large-10 medium-8 columns content">
    <h3><?= __('Affiliations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('convent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('religious_order_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($affiliations as $affiliation): ?>
            <tr>
                <td><?= $affiliation->has('convent') ? $this->Html->link($affiliation->convent->name, ['controller' => 'Convents', 'action' => 'view', $affiliation->convent->id]) : '' ?></td>
                <td><?= $affiliation->has('religious_order') ? $this->Html->link($affiliation->religious_order->name, ['controller' => 'ReligiousOrders', 'action' => 'view', $affiliation->religious_order->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $affiliation->convent_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affiliation->convent_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affiliation->convent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliation->convent_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
