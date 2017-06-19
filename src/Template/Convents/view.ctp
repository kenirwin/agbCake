<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Convent'), ['action' => 'edit', $convent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Convent'), ['action' => 'delete', $convent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Convents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Convent'), ['action' => 'add']) ?> </li>
	<?= $this->element('menu'); ?>
    </ul>
</nav>
<div class="convents view large-10 medium-8 columns content">
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

<!--
    <div class="related">
        <h4><?= __('Related Women') ?></h4>
        <?php if (!empty($convent->women)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Birth Year') ?></th>
                <th scope="col"><?= __('Death Year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($convent->women as $women): ?>
            <tr>
                <td><?= h($women->id) ?></td>
                <td><?= $this->Html->link( h($women->name), ['controller' => 'Women', 'action' => 'view', $women->id]) ?></td>
                <? 
		if ($women->birth_approx == 1) { 
		$birth_circa = 'ca. '; }
		else { $birth_circa = ''; }
		if ($women->death_approx == 1) { 
		$death_circa = 'ca. '; }
		else { $death_circa = ''; }
		?>
                <td><?= h($birth_circa . $women->birth_year) ?></td>
                <td><?= h($death_circa . $women->death_year) ?></td>
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
-->

<div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($convent->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Woman Id') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($convent->roles as $role): ?>
	    <?
	    $women = $convent->women;
	    foreach ($women as $woman) {
	    if ($woman->id == $role->woman_id) { $curr_woman = $woman->name; }
	    }
	    ?>
            <tr>
                <td><?= h($role->id) ?></td>
                <td><?= $this->Html->link(h($curr_woman), ['controller' => 'Women', 'action' => 'view', $role->woman_id]) ?></td>
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
        <h4><?= __('Related Religious Orders') ?></h4>
	      <pre>
    </pre>
        <?php if (!empty($convent->religious_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('VIAF') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
           <?php foreach ($convent->religious_orders as $order): ?>
            <tr>
                <td><?= h($order->id) ?></td>
	   <td><?= $this->Html->link(h($order->name), ['controller' => 'ReligiousOrders', 'action' => 'view', $order->id]) ?></td>
	   <td><?= $this->Html->link('VIAF', h($order->viaf_url)) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ReligiousOrders', 'action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ReligiousOrders', 'action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReligiousOrders', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>




<div class="related">
        <h4><?= __('Related Architectural Images') ?></h4>
	      <?php if (!empty($convent->architectural_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Image Type') ?></th>
                <th scope="col"><?= __('Image URL') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
	   <?php foreach ($convent->architectural_images as $image): ?>
            <tr>
                <td><?= h($image->id) ?></td>
	   <td><?= $this->Html->link( h($image->title), ['controller' => 'ArchitecturalImages', 'action' => 'view', $image->id]);?></td>
                <td><?= h($image->image_type) ?></td>
                <td>
	   <? 
	   if ($image->image_url) {
	     print '<a href="'.h($image->image_url).'">Link</a>';
	   }

	   ?></td>
	   <td><? // Image
	   if ($image->image_dir && $image->image) { 
	     $img_url = preg_replace("/webroot/","",$image->image_dir) . $image->image;
	     print $this->Html->link( $this->Html->image($img_url, ['class'=>'index-thumb']), ['controller' => 'ArchitecturalImages', 'action' => 'view', $image->id], ['escape' => false]);
	   }
	   ?></td>
	   
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ArchitecturalImages', 'action' => 'view', $image->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ArchitecturalImages', 'action' => 'edit', $image->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ArchitecturalImages', 'action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>





</div>
