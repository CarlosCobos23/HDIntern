<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Item $item
  */
?>

<div class="items view">
    <h3><?= h($item->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($item->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itemcategory') ?></th>
            <td><?= $item->has('itemcategory') ? $this->Html->link($item->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $item->itemcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= $item->has('currency') ? $this->Html->link($item->currency->name, ['controller' => 'Currencies', 'action' => 'view', $item->currency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($item->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($item->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= $item->has('brand') ? $this->Html->link($item->brand->name, ['controller' => 'Brands', 'action' => 'view', $item->brand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unit Cost') ?></th>
            <td><?= $this->Number->format($item->unit_cost) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Itemcodes') ?>">
        <h4><?= __('Related Itemcodes') ?></h4>
        <?php if (!empty($item->itemcodes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Statusitem Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Warranty') ?></th>
                <th scope="col"><?= __('Positionbranch Id') ?></th>
                <th scope="col"><?= __('Service Tag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($item->itemcodes as $itemcodes): ?>
            <tr>
                <td><?= h($itemcodes->id) ?></td>
                <td><?= h($itemcodes->item_id) ?></td>
                <td><?= h($itemcodes->serial) ?></td>
                <td><?= h($itemcodes->invoice_id) ?></td>
                <td><?= h($itemcodes->statusitem_id) ?></td>
                <td><?= h($itemcodes->created) ?></td>
                <td><?= h($itemcodes->warranty) ?></td>
                <td><?= h($itemcodes->positionbranch_id) ?></td>
                <td><?= h($itemcodes->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcodes', 'action' => 'view', $itemcodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcodes', 'action' => 'edit', $itemcodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcodes', 'action' => 'delete', $itemcodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcodes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Stockmoves Details') ?>">
        <h4><?= __('Related Stockmoves Details') ?></h4>
        <?php if (!empty($item->stockmoves_details)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Stockmove Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Itemcode Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Deliverydate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($item->stockmoves_details as $stockmovesDetails): ?>
            <tr>
                <td><?= h($stockmovesDetails->id) ?></td>
                <td><?= h($stockmovesDetails->stockmove_id) ?></td>
                <td><?= h($stockmovesDetails->item_id) ?></td>
                <td><?= h($stockmovesDetails->itemcode_id) ?></td>
                <td><?= h($stockmovesDetails->qty) ?></td>
                <td><?= h($stockmovesDetails->deliverydate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'StockmovesDetails', 'action' => 'view', $stockmovesDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'StockmovesDetails', 'action' => 'edit', $stockmovesDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'StockmovesDetails', 'action' => 'delete', $stockmovesDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmovesDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Stocks') ?>">
        <h4><?= __('Related Stocks') ?></h4>
        <?php if (!empty($item->stocks)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Warehouse Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Reorder') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($item->stocks as $stocks): ?>
            <tr>
                <td><?= h($stocks->id) ?></td>
                <td><?= h($stocks->warehouse_id) ?></td>
                <td><?= h($stocks->item_id) ?></td>
                <td><?= h($stocks->reorder) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stocks', 'action' => 'view', $stocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stocks', 'action' => 'edit', $stocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stocks', 'action' => 'delete', $stocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Currencies'), ['controller' => 'Currencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Currency'), ['controller' => 'Currencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stockmoves Details'), ['controller' => 'StockmovesDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stockmoves Detail'), ['controller' => 'StockmovesDetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>