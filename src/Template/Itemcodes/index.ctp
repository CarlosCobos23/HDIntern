<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemcode[]|\Cake\Collection\CollectionInterface $itemcodes
  */
?>

<div class="itemcodes index">
    <h3><?= __('Itemcodes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Itemcode'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusitem_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('warranty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('positionbranch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_tag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemcodes as $itemcode): ?>
            <tr>
                <td><?= $this->Number->format($itemcode->id) ?></td>
                <td><?= $itemcode->has('item') ? $this->Html->link($itemcode->item->name, ['controller' => 'Items', 'action' => 'view', $itemcode->item->id]) : '' ?></td>
                <td><?= h($itemcode->serial) ?></td>
                <td><?= $itemcode->has('invoice') ? $this->Html->link($itemcode->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $itemcode->invoice->id]) : '' ?></td>
                <td><?= $itemcode->has('statusitem') ? $this->Html->link($itemcode->statusitem->name, ['controller' => 'Statusitems', 'action' => 'view', $itemcode->statusitem->id]) : '' ?></td>
                <td><?= h($itemcode->created) ?></td>
                <td><?= h($itemcode->warranty) ?></td>
                <td><?= $itemcode->has('positionbranch') ? $this->Html->link($itemcode->positionbranch->name, ['controller' => 'Positionbranches', 'action' => 'view', $itemcode->positionbranch->id]) : '' ?></td>
                <td><?= h($itemcode->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemcode->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemcode->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcode->id)]) ?>
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
        <li><?= $this->Html->link(__('New Itemcode'), ['action' => 'add']) ?></li>
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