<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Convent'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="convents index large-10 medium-9 columns content">
    <h3><?= __('Convents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_english') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_spanish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_portuguese') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_founding') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_closing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($convents as $convent): ?>
            <tr>
                <td><?= $this->Number->format($convent->id) ?></td>
                <td><?= h($convent->name) ?></td>
                <td><?= h($convent->name_english) ?></td>
                <td><?= h($convent->name_spanish) ?></td>
                <td><?= h($convent->name_portuguese) ?></td>
                <td><?= h($convent->name_other) ?></td>
                <td><?= h($convent->city) ?></td>
                <td><?= h($convent->country) ?></td>
                <td class="index-date"><?= h($convent->date_founding); ?></td>
                <td class="index-date"><?= h($convent->date_closing); ?></td>
                <td><?= h($convent->latitude) ?></td>
                <td><?= h($convent->longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $convent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $convent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $convent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convent->id)]) ?>
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
