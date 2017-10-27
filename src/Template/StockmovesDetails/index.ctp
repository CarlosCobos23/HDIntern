<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\StockmovesDetail[]|\Cake\Collection\CollectionInterface $stockmovesDetails
  */
?>

<div class="stockmovesDetails index">
    <h3><?= __('Stockmoves Details') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Stockmoves Detail'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stockmove_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deliverydate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockmovesDetails as $stockmovesDetail): ?>
            <tr>
                <td><?= $this->Number->format($stockmovesDetail->id) ?></td>
                <td><?= $stockmovesDetail->has('stockmove') ? $this->Html->link($stockmovesDetail->stockmove->id, ['controller' => 'Stockmoves', 'action' => 'view', $stockmovesDetail->stockmove->id]) : '' ?></td>
                <td><?= $stockmovesDetail->has('item') ? $this->Html->link($stockmovesDetail->item->name, ['controller' => 'Items', 'action' => 'view', $stockmovesDetail->item->id]) : '' ?></td>
                <td><?= $stockmovesDetail->has('itemcode') ? $this->Html->link($stockmovesDetail->itemcode->id, ['controller' => 'Itemcodes', 'action' => 'view', $stockmovesDetail->itemcode->id]) : '' ?></td>
                <td><?= $this->Number->format($stockmovesDetail->qty) ?></td>
                <td><?= h($stockmovesDetail->deliverydate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockmovesDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockmovesDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockmovesDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmovesDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
    </ul>
</nav>