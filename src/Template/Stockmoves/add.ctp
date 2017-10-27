<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmoves form">
	<h3><?= __('Add Stockmove') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($stockmove) ?>
        <?php
            echo $this->Form->control('warehouse_id', ['options' => $warehouses, 'empty' => true]);
            echo $this->Form->control('warehouse_2');
            echo $this->Form->control('receiver');
            echo $this->Form->control('receiver_sign');
            echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true]);
            echo $this->Form->control('shipper_id', ['options' => $shippers, 'empty' => true]);
            echo $this->Form->control('guide_number');
            echo $this->Form->control('packages');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('notes');
            echo $this->Form->control('confirmed');
            echo $this->Form->control('parent_id');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Warehouses'), ['controller' => 'Warehouses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Warehouse'), ['controller' => 'Warehouses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movereasons'), ['controller' => 'Movereasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereason'), ['controller' => 'Movereasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shippers'), ['controller' => 'Shippers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipper'), ['controller' => 'Shippers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['controller' => 'StockmovesDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>