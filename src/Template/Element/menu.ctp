	<hr>
        <li class="heading"><?= __('Women') ?></li>		
	<li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?> </li>
	<li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?> </li>
	<hr>
        <li class="heading"><?= __('Convents') ?></li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?></li>
	<li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?></li>
	<hr>
        <li class="heading"><?= __('Roles') ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
	<li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
	<hr>
        <li class="heading"><?= __('Portraits') ?></li>
        <li><?= $this->Html->link(__('List Portraits'), ['controller' => 'Portraits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portrait'), ['controller' => 'Portraits', 'action' => 'add']) ?></li>
	<hr>
        <li class="heading"><?= __('Religious Orders') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'ReligiousOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'ReligiousOrders', 'action' => 'add']) ?></li>