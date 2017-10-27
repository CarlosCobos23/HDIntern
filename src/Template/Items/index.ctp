<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
  */
?>

<div class="items index">
    <h3><?= __('Items') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit_cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brand_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= h($item->name) ?></td>
                <td><?= $item->has('itemcategory') ? $this->Html->link($item->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $item->itemcategory->id]) : '' ?></td>
                <td><?= $item->has('currency') ? $this->Html->link($item->currency->name, ['controller' => 'Currencies', 'action' => 'view', $item->currency->id]) : '' ?></td>
                <td><?= h($item->model) ?></td>
                <td><?= h($item->color) ?></td>
                <td><?= $this->Number->format($item->unit_cost) ?></td>
                <td><?= $item->has('brand') ? $this->Html->link($item->brand->name, ['controller' => 'Brands', 'action' => 'view', $item->brand->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
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