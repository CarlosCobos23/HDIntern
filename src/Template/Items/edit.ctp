<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form">
	<h3><?= __('Edit Item') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($item) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true]);
            echo $this->Form->control('currency_id', ['options' => $currencies, 'empty' => true]);
            echo $this->Form->control('model');
            echo $this->Form->control('color');
            echo $this->Form->control('unit_cost');
            echo $this->Form->control('brand_id', ['options' => $brands, 'empty' => true]);
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
                ['action' => 'delete', $item->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['controller' => 'StockmovesDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
    </ul>
</nav>