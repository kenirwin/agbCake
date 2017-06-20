<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Religious Order'), ['action' => 'add']) ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="religiousOrders index large-10 medium-9 columns content">
    <h3><?= __('Religious Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('viaf_url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($religiousOrders as $religiousOrder): ?>
            <tr>
                <td><?= $this->Number->format($religiousOrder->id) ?></td>
                <td><?= h($religiousOrder->name) ?></td>
    <td><?= $this->Html->link('VIAF', $religiousOrder->viaf_url, ['target'=>'external']); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $religiousOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $religiousOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $religiousOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $religiousOrder->id)]) ?>
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
