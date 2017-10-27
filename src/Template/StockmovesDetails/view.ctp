<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\StockmovesDetail $stockmovesDetail
  */
?>

<div class="stockmovesDetails view">
    <h3><?= h($stockmovesDetail->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Stockmoves Detail'), ['action' => 'delete', $stockmovesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmovesDetail->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Stockmoves Detail'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Stockmoves Detail'), ['action' => 'edit', $stockmovesDetail->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Stockmove') ?></th>
            <td><?= $stockmovesDetail->has('stockmove') ? $this->Html->link($stockmovesDetail->stockmove->id, ['controller' => 'Stockmoves', 'action' => 'view', $stockmovesDetail->stockmove->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $stockmovesDetail->has('item') ? $this->Html->link($stockmovesDetail->item->name, ['controller' => 'Items', 'action' => 'view', $stockmovesDetail->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itemcode') ?></th>
            <td><?= $stockmovesDetail->has('itemcode') ? $this->Html->link($stockmovesDetail->itemcode->id, ['controller' => 'Itemcodes', 'action' => 'view', $stockmovesDetail->itemcode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stockmovesDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($stockmovesDetail->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deliverydate') ?></th>
            <td><?= h($stockmovesDetail->deliverydate) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stockmoves Detail'), ['action' => 'edit', $stockmovesDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stockmoves Detail'), ['action' => 'delete', $stockmovesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmovesDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>