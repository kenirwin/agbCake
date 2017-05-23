<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Convent'), ['action' => 'edit', $convent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Convent'), ['action' => 'delete', $convent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convent->id)]) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="convents view large-9 medium-8 columns content">
    <h3><?= h($convent->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($convent->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name English') ?></th>
            <td><?= h($convent->name_english) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Spanish') ?></th>
            <td><?= h($convent->name_spanish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Portuguese') ?></th>
            <td><?= h($convent->name_portuguese) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Other') ?></th>
            <td><?= h($convent->name_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($convent->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($convent->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($convent->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($convent->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($convent->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Founding') ?></th>
            <td><?= $this->Number->format($convent->date_founding) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Closing') ?></th>
            <td><?= $this->Number->format($convent->date_closing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($convent->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($convent->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Women') ?></h4>
        <?php if (!empty($convent->women)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Viaf Url') ?></th>
                <th scope="col"><?= __('Name English') ?></th>
                <th scope="col"><?= __('Name Spanish') ?></th>
                <th scope="col"><?= __('Name Portuguese') ?></th>
                <th scope="col"><?= __('Name Other') ?></th>
                <th scope="col"><?= __('Birth Approx') ?></th>
                <th scope="col"><?= __('Birth Year') ?></th>
                <th scope="col"><?= __('Death Approx') ?></th>
                <th scope="col"><?= __('Death Year') ?></th>
                <th scope="col"><?= __('Related To') ?></th>
                <th scope="col"><?= __('Religious Order') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($convent->women as $women): ?>
            <tr>
                <td><?= h($women->id) ?></td>
                <td><?= h($women->name) ?></td>
                <td><?= h($women->viaf_url) ?></td>
                <td><?= h($women->name_english) ?></td>
                <td><?= h($women->name_spanish) ?></td>
                <td><?= h($women->name_portuguese) ?></td>
                <td><?= h($women->name_other) ?></td>
                <td><?= h($women->birth_approx) ?></td>
                <td><?= h($women->birth_year) ?></td>
                <td><?= h($women->death_approx) ?></td>
                <td><?= h($women->death_year) ?></td>
                <td><?= h($women->related_to) ?></td>
                <td><?= h($women->religious_order) ?></td>
                <td><?= h($women->notes) ?></td>
                <td><?= h($women->created) ?></td>
                <td><?= h($women->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Women', 'action' => 'view', $women->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Women', 'action' => 'edit', $women->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Women', 'action' => 'delete', $women->id], ['confirm' => __('Are you sure you want to delete # {0}?', $women->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
