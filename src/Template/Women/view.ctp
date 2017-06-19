<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Woman'), ['action' => 'edit', $woman->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Woman'), ['action' => 'delete', $woman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="women view large-10 medium-8 columns content">
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
            <td><? if ($woman->viaf_url) { print '<a target="viaf" href="'.h($woman->viaf_url).'">'.h($woman->viaf_url).'</a>'; } ?></td>
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
            <th scope="row"><?= __('Birth Approx') ?></th>
            <td><? if ($woman->birth_approx == 1) { print 'circa'; } ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Year') ?></th>
            <td><?= h($woman->birth_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Approx') ?></th>
            <td><? if ($woman->death_approx == 1) { print 'circa'; } ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Year') ?></th>
            <td><?= h($woman->death_year) ?></td>
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
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->notes)); ?>
    </div>


    <div class="related">
        <h4><?= __('Roles for '. $woman->name) ?></h4>
        <?php if (!empty($woman->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Convent') ?></th>
                <th scope="col"><?= __('Role') ?></th>
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
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($woman->portraits as $portraits): ?>
            <tr>
                <td><?= h($portraits->id) ?></td>
                <td><?= h($portraits->title) ?></td>
                <td><?= h($portraits->painter) ?></td>
                <td><? if($portraits->painter_viaf) { print '<a target="viaf" href="'. h($portraits->painter_viaf) .'">VIAF</a>'; } ?></td>

	   <? 
	   if ($portraits->date_painted_approx == 1) { $circa = 'ca. '; }
	   else { $circa = ''; }
?>


                <td><?= $circa.h($portraits->date_painted) ?></td>
                <td><?
	      if ($portraits->image_dir && $portraits->image) {
		$img_url = preg_replace("/webroot/","",$portraits->image_dir) . $portraits->image;
		print $this->Html->link( $this->Html->image($img_url, ['class'=>'index-thumb']), ['controller' => 'Portraits', 'action' => 'view', $portraits->id], ['escape' => false]);
	      }
	      ?></td>
                <td><?= h($portraits->created) ?></td>
                <td><?= h($portraits->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portraits', 'action' => 'view', $portraits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portraits', 'action' => 'edit', $portraits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portraits', 'action' => 'delete', $portraits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portraits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>
