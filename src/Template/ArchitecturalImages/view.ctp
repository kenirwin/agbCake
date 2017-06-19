<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Architectural Image'), ['action' => 'edit', $architecturalImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Architectural Image'), ['action' => 'delete', $architecturalImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $architecturalImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Architectural Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Architectural Image'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="architecturalImages view large-10 medium-9 columns content">
    <h3><?= h($architecturalImage->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($architecturalImage->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Convent') ?></th>
            <td><?= $architecturalImage->has('convent') ? $this->Html->link($architecturalImage->convent->name, ['controller' => 'Convents', 'action' => 'view', $architecturalImage->convent->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Type') ?></th>
            <td><?= h($architecturalImage->image_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($architecturalImage->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Dir') ?></th>
            <td><?= h($architecturalImage->image_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($architecturalImage->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Source') ?></th>
            <td><?= h($architecturalImage->image_source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($architecturalImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($architecturalImage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($architecturalImage->modified) ?></td>
        </tr>
    </table>
    <div id="image">
    	 <? $img_url = preg_replace("/webroot/","",$architecturalImage->image_dir) .'/'. $architecturalImage->image; ?> 
	 <? if (preg_match('/files/',$img_url)) { ?>
    	 <?= $this->Html->image($img_url, ['alt' => $architecturalImage->title]); ?>	
	 <? } ?>
    </div>

</div>
