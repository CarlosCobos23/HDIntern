<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stocks form">
	<h3><?= __('Edit Stock') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($stock) ?>
        <?php
            echo $this->Form->control('warehouse_id', ['options' => $warehouses, 'empty' => true]);
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('reorder');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Warehouses'), ['controller' => 'Warehouses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Warehouse'), ['controller' => 'Warehouses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>