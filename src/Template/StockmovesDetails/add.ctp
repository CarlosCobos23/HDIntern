<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmovesDetails form">
	<h3><?= __('Add Stockmoves Detail') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($stockmovesDetail) ?>
        <?php
            echo $this->Form->control('stockmove_id', ['options' => $stockmoves, 'empty' => true]);
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
            echo $this->Form->control('qty');
            echo $this->Form->control('deliverydate');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
    </ul>
</nav>