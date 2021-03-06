<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portrait'), ['action' => 'edit', $portrait->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portrait'), ['action' => 'delete', $portrait->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portrait->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portraits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portrait'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="portraits view large-10 medium-9 columns content">
    <h3><?= h($portrait->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portrait->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($portrait->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Woman') ?></th>
            <td><?= $portrait->has('woman') ? $this->Html->link($portrait->woman->name, ['controller' => 'Women', 'action' => 'view', $portrait->woman->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Painter') ?></th>
            <td><?= h($portrait->painter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Painter Viaf') ?></th>
    <td><? if ($portrait->painter_viaf) { print $this->Html->link(h($portrait->painter_viaf),h($portrait->painter_viaf),['target'=>'external']); } ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Painted') ?></th>
            <td>
    <? if($portrait->date_painted_approx == 1) {print 'circa ';} ?>
    <?= h($portrait->date_painted) ?>
    </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Dir') ?></th>
            <td><?= h($portrait->image_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Filename') ?></th>
            <td><?= h($portrait->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($portrait->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($portrait->modified) ?></td>
        </tr>
    </table>
    <div id="image">
    	 <? $img_url = preg_replace("/webroot/","",$portrait->image_dir) .'/'. $portrait->image; ?> 
	 <? if (preg_match('/files/',$img_url)) { ?>
    	 <?= $this->Html->image($img_url, ['alt' => 'Photo of ' . $portrait->title]); ?>	
	 <? } ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($portrait->notes)); ?>
    </div>
</div>
