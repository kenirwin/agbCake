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




<div class="related view large-10 medium-9 columns content">
    <h4><?= __('Related Women &amp; Building Projects') ?></h4>
    <?php if (!empty($architecturalStyle->roles)): 
	if (!empty($architecturalStyle->women)):
	  $women = $architecturalStyle->women;
$convents = $architecturalStyle->convents;
endif; //women
?>

        <table cellpadding="0" cellspacing="0">
            <tr>
  <th scope="col"><?= __('Role Id') ?></th>
  <th scope="col"><?= __('Woman') ?></th>
  <th scope="col"><?= __('Role') ?></th>
  <th scope="col"><?= __('Convent') ?></th>
  <th scope="col"><?= __('Start Year') ?></th>
  <th scope="col"><?= __('End Year') ?></th>
  <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
  <?php foreach ($architecturalStyle->roles as $role): ?>
            <tr>
  <td><?= $this->Html->link(h($role->id), ['controller' => 'Roles', 'action' => 'view', $role->id]) ?></td>
<?php
  foreach ($women as $woman) {
  if ($woman->id == $role->woman_id) { $curr_woman = $woman->name; }
}
?>
  <td><?= $this->Html->link(h($curr_woman), ['controller' => 'Women', 'action' => 'view', $role->woman_id]) ?></td>
  <td><?= h($role->role) ?></td>
<?php
  foreach ($convents as $convent) {
  if ($convent->id == $role->convent_id) { $curr_convent = $convent->name; }
}
?>
  <td><?= $this->Html->link(h($curr_convent), ['controller' => 'Convents', 'action' => 'view', $role->convent_id]) ?></td>
  <td><?= h($role->start_year) ?></td>
  <td><?= h($role->end_year) ?></td>
                <td class="actions">
  <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $role->id]) ?>
  <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $role->id]) ?>
  <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
                </td>
            </tr>
  <?php endforeach; ?>
        </table>
	<?php else: ?>
		<div class="nothing-to-list">No related building projects to show.</div>        <?php endif; ?>
    </div>