<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['action' => 'add']) ?></li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="women index large-10 medium-9 columns content">
    <h3><?= __('Women') ?></h3>
    <?= $this->Form->create("",['type'=>'get']); ?>
    <?= $this->Form->control('keyword',['default'=>$this->request->query('keyword')]); ?>
    <? 
    if (null === $this->request->query('search_notes')) { $checked = true; }
    elseif ($this->request->query('search_notes') == 0) { $checked = false; }
    else { $checked = true; }
?>
    <?= $this->Form->control('search_notes',['type'=>'checkbox', 'checked'=>$checked]); ?>
    <button>Search</button>
    <?= $this->Form->end(); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('viaf_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_english') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_spanish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_portuguese') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('binche') ?></th>
                <th scope="col"><?= $this->Paginator->sort('read_diana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('religious_order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($women as $woman): ?>
            <tr>
                <td><?= $this->Number->format($woman->id) ?></td>
                <td><?= h($woman->name) ?></td>
    <td><? if ($woman->viaf_url) { print $this->Html->link('VIAF',h($woman->viaf_url),['target'=>'external']); } ?></td>
                <td><?= h($woman->name_english) ?></td>
                <td><?= h($woman->name_spanish) ?></td>
                <td><?= h($woman->name_portuguese) ?></td>
                <td><?= h($woman->name_other) ?></td>
                <td class="index-date"><? if ($woman->birth_approx == 1) { print 'ca. '; } ?><?= h($woman->birth_year) ?></td>
                <td><?= h($woman->birth_place) ?></td>
                <td class="index-date"><? if ($woman->death_approx == 1) { print 'ca. '; } ?><?= h($woman->death_year) ?></td>
                <td><?= h($woman->birth_place) ?></td>
                <td>
<?
    if ($woman->binche == 1) { echo "Y"; 
			       //		       if (isset($woman->binche_note)) { echo ': '. h($woman->binche_note); }
    }  
elseif ($woman->binche === 0) { echo "N"; }
?>
                </td>
                <td>
<?
    if ($woman->read_diana == 1) { echo "Y"; 
			       //		       if (isset($woman->diana_note)) { echo ': '. h($woman->diana_note); }
    }  
elseif ($woman->read_diana === 0) { echo "N"; }
?>
                </td>
                <td><?= h($woman->religious_order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $woman->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $woman->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $woman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]) ?>
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
