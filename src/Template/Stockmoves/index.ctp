<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Stockmove[]|\Cake\Collection\CollectionInterface $stockmoves
  */
?>

<div class="stockmoves index">
    <h3><?= __('Stockmoves') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Stockmove'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('warehouse_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('warehouse_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver_sign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movereason_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipper_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guide_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('packages') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('confirmed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockmoves as $stockmove): ?>
            <tr>
                <td><?= $this->Number->format($stockmove->id) ?></td>
                <td><?= $stockmove->has('warehouse') ? $this->Html->link($stockmove->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $stockmove->warehouse->id]) : '' ?></td>
                <td><?= $this->Number->format($stockmove->warehouse_2) ?></td>
                <td><?= $this->Number->format($stockmove->receiver) ?></td>
                <td><?= h($stockmove->receiver_sign) ?></td>
                <td><?= $stockmove->has('movereason') ? $this->Html->link($stockmove->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $stockmove->movereason->id]) : '' ?></td>
                <td><?= $stockmove->has('shipper') ? $this->Html->link($stockmove->shipper->name, ['controller' => 'Shippers', 'action' => 'view', $stockmove->shipper->id]) : '' ?></td>
                <td><?= h($stockmove->guide_number) ?></td>
                <td><?= $this->Number->format($stockmove->packages) ?></td>
                <td><?= $stockmove->has('user') ? $this->Html->link($stockmove->user->name, ['controller' => 'Users', 'action' => 'view', $stockmove->user->id]) : '' ?></td>
                <td><?= $this->Number->format($stockmove->confirmed) ?></td>
                <td><?= $this->Number->format($stockmove->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockmove->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockmove->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockmove->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmove->id)]) ?>
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
        <li><?= $this->Html->link(__('New Stockmove'), ['action' => 'add']) ?></li>
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