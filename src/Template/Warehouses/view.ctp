<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Warehouse $warehouse
  */
?>

<div class="warehouses view">
    <h3><?= h($warehouse->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Warehouse'), ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Warehouse'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Warehouse'), ['action' => 'edit', $warehouse->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($warehouse->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $warehouse->has('branch') ? $this->Html->link($warehouse->branch->name, ['controller' => 'Branches', 'action' => 'view', $warehouse->branch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($warehouse->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Stockmoves') ?>">
        <h4><?= __('Related Stockmoves') ?></h4>
        <?php if (!empty($warehouse->stockmoves)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Warehouse Id') ?></th>
                <th scope="col"><?= __('Warehouse 2') ?></th>
                <th scope="col"><?= __('Receiver') ?></th>
                <th scope="col"><?= __('Receiver Sign') ?></th>
                <th scope="col"><?= __('Movereason Id') ?></th>
                <th scope="col"><?= __('Shipper Id') ?></th>
                <th scope="col"><?= __('Guide Number') ?></th>
                <th scope="col"><?= __('Packages') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Confirmed') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($warehouse->stockmoves as $stockmoves): ?>
            <tr>
                <td><?= h($stockmoves->id) ?></td>
                <td><?= h($stockmoves->warehouse_id) ?></td>
                <td><?= h($stockmoves->warehouse_2) ?></td>
                <td><?= h($stockmoves->receiver) ?></td>
                <td><?= h($stockmoves->receiver_sign) ?></td>
                <td><?= h($stockmoves->movereason_id) ?></td>
                <td><?= h($stockmoves->shipper_id) ?></td>
                <td><?= h($stockmoves->guide_number) ?></td>
                <td><?= h($stockmoves->packages) ?></td>
                <td><?= h($stockmoves->user_id) ?></td>
                <td><?= h($stockmoves->notes) ?></td>
                <td><?= h($stockmoves->confirmed) ?></td>
                <td><?= h($stockmoves->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stockmoves', 'action' => 'view', $stockmoves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stockmoves', 'action' => 'edit', $stockmoves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stockmoves', 'action' => 'delete', $stockmoves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmoves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Stocks') ?>">
        <h4><?= __('Related Stocks') ?></h4>
        <?php if (!empty($warehouse->stocks)): ?>
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
            <?php foreach ($warehouse->stocks as $stocks): ?>
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
        <li><?= $this->Html->link(__('Edit Warehouse'), ['action' => 'edit', $warehouse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Warehouse'), ['action' => 'delete', $warehouse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Warehouse'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>