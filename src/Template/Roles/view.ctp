<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="roles view large-10 medium-9 columns content">
    <h3><?= $role->woman->name .' as '. $role->role .' @ '. $role->convent->name ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Woman') ?></th>
            <td><?= $role->has('woman') ? $this->Html->link($role->woman->name, ['controller' => 'Women', 'action' => 'view', $role->woman->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Convent') ?></th>
            <td><?= $role->has('convent') ? $this->Html->link($role->convent->name, ['controller' => 'Convents', 'action' => 'view', $role->convent->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Architectural Style') ?></th>
            <td><?= $role->has('architectural_style') ? $this->Html->link($role->architectural_style->name, ['controller' => 'ArchitecturalStyles', 'action' => 'view', $role->architectural_style->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Year') ?></th>
            <td><?= h($role->start_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Year') ?></th>
            <td><?= h($role->end_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($role->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($role->modified) ?></td>
        </tr>
    </table>
</div>
