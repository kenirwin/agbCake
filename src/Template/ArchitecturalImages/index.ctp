<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Architectural Image'), ['action' => 'add']) ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="architecturalImages index large-10 medium-8 columns content">
    <h3><?= __('Architectural Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('convent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_source') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($architecturalImages as $architecturalImage): ?>
    	 <? $img_url = preg_replace("/webroot/","",$architecturalImage->image_dir) .'/'. $architecturalImage->image; ?> 
            <tr>
                <td><?= $this->Number->format($architecturalImage->id) ?></td>
                <td><?= h($architecturalImage->title) ?></td>
                <td><?= $architecturalImage->has('convent') ? $this->Html->link($architecturalImage->convent->name, ['controller' => 'Convents', 'action' => 'view', $architecturalImage->convent->id]) : '' ?></td>
                <td><?= h($architecturalImage->image_type) ?></td>
    <td><? if (strlen($architecturalImage->image_url)>0) { print '<a href="'.h($architecturalImage->image_url).'">Link</a>'; } ?></td>
                <td>
    <? 
    if (preg_match('/files/',$img_url)) { 	
      $image_link = $this->Html->image($img_url, ['alt' => $architecturalImage->title, 'class' => 'index-thumb']); 
      print $this->Html->link($image_link, ['action'=>'view', $architecturalImage->id], ['escape'=>false]);
    }
?>

		</td>
                <td><?= h($architecturalImage->image_source) ?></td>
                <td><?= h($architecturalImage->created) ?></td>
                <td><?= h($architecturalImage->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $architecturalImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $architecturalImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $architecturalImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $architecturalImage->id)]) ?>
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
