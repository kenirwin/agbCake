<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Portrait'), ['action' => 'add']) ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="portraits index large-9 medium-8 columns content">
    <h3><?= __('Portraits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('woman_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('painter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('painter_viaf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_painted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_painted_approx') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_path_lo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_path_hi') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portraits as $portrait): ?>
            <tr>
                <td><?= $this->Number->format($portrait->id) ?></td>
                <td><?= h($portrait->title) ?></td>
                <td><?= $portrait->has('woman') ? $this->Html->link($portrait->woman->name, ['controller' => 'Women', 'action' => 'view', $portrait->woman->id]) : '' ?></td>
                <td><?= h($portrait->painter) ?></td>
                <td><?= h($portrait->painter_viaf) ?></td>
                <td><?= h($portrait->date_painted) ?></td>
                <td><?= h($portrait->date_painted_approx) ?></td>
                <td><?= h($portrait->image_path_lo) ?></td>
                <td><?= h($portrait->image_path_hi) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $portrait->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $portrait->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $portrait->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portrait->id)]) ?>
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
