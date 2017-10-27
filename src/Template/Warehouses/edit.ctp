<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="warehouses form">
	<h3><?= __('Edit Warehouse') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($warehouse) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
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
                ['action' => 'delete', $warehouse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
    </ul>
</nav>