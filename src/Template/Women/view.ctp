<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Woman'), ['action' => 'edit', $woman->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Woman'), ['action' => 'delete', $woman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="women view large-10 medium-9 columns content">
    <h3><?= h($woman->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($woman->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($woman->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viaf Url') ?></th>
    <td><? if ($woman->viaf_url) { print $this->Html->link(h($woman->viaf_url), h($woman->viaf_url),['target'=>'external']); } ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name English') ?></th>
            <td><?= h($woman->name_english) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Spanish') ?></th>
            <td><?= h($woman->name_spanish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Portuguese') ?></th>
            <td><?= h($woman->name_portuguese) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Other') ?></th>
            <td><?= h($woman->name_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Religious Order') ?></th>
            <td><?= h($woman->religious_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Year') ?></th>
            <td>
            <? if ($woman->birth_approx == 1) { print 'circa '; } ?>
	    <?= h($woman->birth_year) ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Place') ?></th>
            <td><?= h($woman->birth_place) ?></td>
        </tr>
        <tr>
    <th scope="row"><?= __('Death Year') ?></th>
    <td>
    <? if ($woman->death_approx == 1) { print 'circa'; } ?>
    <?= h($woman->death_year) ?>
    </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Place') ?></th>
            <td><?= h($woman->death_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Travelled to Binche') ?></th>
    <td>
<? 
    if ($woman->binche == 1) { echo "Yes"; 
			       if (isset($woman->binche_note)) { echo ': '. h($woman->binche_note); }
    }  
elseif ($woman->binche === 0) { echo "No"; }
else { echo "Unknown"; }
?>
     </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Read the Diana') ?></th>
    <td>
<? 
    if ($woman->read_diana == 1) { echo "Yes"; 
				    if (isset($woman->diana_note)) { echo ': '. h($woman->diana_note); }
    }  
elseif ($woman->read_diana === 0) { echo "No"; }
else { echo "Unknown"; }
?>
     </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($woman->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($woman->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Related To') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->related_to)); ?>
    </div>
    <div class="row">
        <h4><?= __('Binche Travel Note') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->binche_note)); ?>
    </div>
    <div class="row">
        <h4><?= __('Diana Note') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->diana_note)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sources') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->sources)); ?>
    </div>


    <div class="related">
        <h4><?= __('Roles for '. $woman->name) ?></h4>
    <?php if (!empty($woman->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Convent') ?></th>
                <th scope="col"><?= __('Role') ?></th>
	   <th scope="col"><?= __('Architectural Style') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($woman->roles as $role): ?>
	    <?
	    $convents = $woman->convents;
	    foreach ($convents as $convent) {
	    if ($convent->id == $role->convent_id) { $curr_convent = $convent->name; }
	    }
	    ?>	    

            <tr>
                <td><?= $this->Html->Link( h($curr_convent), ['controller' => 'Convents', 'action' => 'view', $role->convent_id]) ?></td>
                <td><?= h($role->role) ?></td>
	      <td>
<?
	      if (is_int($role->style_id)) {
		foreach ($woman->architectural_styles as $style) {
		  if ($style->id = $role->style_id) { 
		    $curr_style = $style->name;   
		  }
		}
		echo $this->Html->link(h($curr_style), ['controller' => 'ArchitecturalStyles', 'action' => 'view', $role->style_id]);
	      }
		  ?>

		  </td>
                <td><?= h($role->start_date) ?></td>
                <td><?= h($role->end_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $role->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $role->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
	<?php else: ?>
		<div class="nothing-to-list">No related roles to show.</div>
        <?php endif; ?>
    </div>


    <div class="related">
        <h4><?= __('Portraits of '.$woman->name) ?></h4>
        <?php if (!empty($woman->portraits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Painter') ?></th>
                <th scope="col"><?= __('Painter Viaf') ?></th>
                <th scope="col"><?= __('Date Painted') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($woman->portraits as $portrait): ?>
            <tr>
                <td><?= h($portrait->id) ?></td>
	   <td><?= $this->Html->link(h($portrait->title),['controller'=>'Portraits','action'=>'view',$portrait->id]) ?></td>
                <td><?= h($portrait->painter) ?></td>
	   <td><? if($portrait->painter_viaf) { print $this->Html->link('VIAF', h($portrait->painter_viaf), ['target'=>'external']); } ?></td>

	   <? 
	   if ($portrait->date_painted_approx == 1) { $circa = 'ca. '; }
	   else { $circa = ''; }
?>


                <td><?= $circa.h($portrait->date_painted) ?></td>
                <td><?
	      if ($portrait->image_dir && $portrait->image) {
		$img_url = preg_replace("/webroot/","",$portrait->image_dir) . $portrait->image;
		print $this->Html->link( $this->Html->image($img_url, ['class'=>'index-thumb']), ['controller' => 'Portraits', 'action' => 'view', $portrait->id], ['escape' => false]);
	      }
	      ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portraits', 'action' => 'view', $portrait->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portraits', 'action' => 'edit', $portrait->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portraits', 'action' => 'delete', $portrait->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portrait->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
	<?php else: ?>
		<div class="nothing-to-list">No related portraits to show.</div>
        <?php endif; ?>

    </div>

</div>
