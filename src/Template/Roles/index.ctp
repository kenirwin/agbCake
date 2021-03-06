<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="roles index large-10 medium-9 columns content">
    <h3><?= __('Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('woman_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('convent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('style_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= $role->has('woman') ? $this->Html->link($role->woman->name, ['controller' => 'Women', 'action' => 'view', $role->woman->id]) : '' ?></td>
                <td><?= $role->has('convent') ? $this->Html->link($role->convent->name, ['controller' => 'Convents', 'action' => 'view', $role->convent->id]) : '' ?></td>
                <td><?= h($role->role) ?></td>
                <td class="index-date"><?= h($role->start_year) ?></td>
                <td class="index-date"><?= h($role->end_year) ?></td>
    <td><?= $role->has('architectural_style') ? $this->Html->link($role->architectural_style->name, ['controller' => 'ArchitecturalStyles', 'action' => 'view', $role->architectural_style->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $role->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
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
