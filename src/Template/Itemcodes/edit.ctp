<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcodes form">
	<h3><?= __('Edit Itemcode') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($itemcode) ?>
        <?php
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('serial');
            echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
            echo $this->Form->control('statusitem_id', ['options' => $statusitems, 'empty' => true]);
            echo $this->Form->control('warranty', ['empty' => true]);
            echo $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true]);
            echo $this->Form->control('service_tag');
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
                ['action' => 'delete', $itemcode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemcode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusitems'), ['controller' => 'Statusitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusitem'), ['controller' => 'Statusitems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['controller' => 'StockmovesDetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>