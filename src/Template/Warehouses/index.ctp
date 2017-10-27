<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Warehouse[]|\Cake\Collection\CollectionInterface $warehouses
  */
?>

<div class="warehouses index">
    <h3><?= __('Warehouses') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Warehouse'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($warehouses as $warehouse): ?>
            <tr>
                <td><?= $this->Number->format($warehouse->id) ?></td>
                <td><?= h($warehouse->name) ?></td>
                <td><?= $warehouse->has('branch') ? $this->Html->link($warehouse->branch->name, ['controller' => 'Branches', 'action' => 'view', $warehouse->branch->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $warehouse->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $warehouse->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]) ?>
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
        <li><?= $this->Html->link(__('New Warehouse'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
    </ul>
</nav>