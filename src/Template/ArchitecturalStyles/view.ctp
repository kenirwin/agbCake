<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Architectural Style'), ['action' => 'edit', $architecturalStyle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Architectural Style'), ['action' => 'delete', $architecturalStyle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $architecturalStyle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Architectural Styles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Architectural Style'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="architecturalStyles view large-10 medium-9 columns content">
    <h3><?= h($architecturalStyle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($architecturalStyle->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($architecturalStyle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($architecturalStyle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($architecturalStyle->modified) ?></td>
        </tr>
    </table>
</div>

<?
    $roles = $architecturalStyle->roles;
foreach($roles as $role) {
  print '<p>'.$role.'</p>';
}
    var_dump($architecturalStyle);
?>