<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemcategory $itemcategory
  */
?>

<div class="itemcategories view">
    <h3><?= h($itemcategory->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Itemcategory'), ['action' => 'delete', $itemcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcategory->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Itemcategory'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Itemcategory'), ['action' => 'edit', $itemcategory->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($itemcategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Itemcategory') ?></th>
            <td><?= $itemcategory->has('parent_itemcategory') ? $this->Html->link($itemcategory->parent_itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $itemcategory->parent_itemcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemcategory->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Itemcategories') ?>">
        <h4><?= __('Related Itemcategories') ?></h4>
        <?php if (!empty($itemcategory->child_itemcategories)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemcategory->child_itemcategories as $childItemcategories): ?>
            <tr>
                <td><?= h($childItemcategories->id) ?></td>
                <td><?= h($childItemcategories->name) ?></td>
                <td><?= h($childItemcategories->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcategories', 'action' => 'view', $childItemcategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcategories', 'action' => 'edit', $childItemcategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcategories', 'action' => 'delete', $childItemcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childItemcategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Items') ?>">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($itemcategory->items)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Itemcategory Id') ?></th>
                <th scope="col"><?= __('Currency Id') ?></th>
                <th scope="col"><?= __('Model') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Unit Cost') ?></th>
                <th scope="col"><?= __('Brand Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemcategory->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->itemcategory_id) ?></td>
                <td><?= h($items->currency_id) ?></td>
                <td><?= h($items->model) ?></td>
                <td><?= h($items->color) ?></td>
                <td><?= h($items->unit_cost) ?></td>
                <td><?= h($items->brand_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Layoutcategories') ?>">
        <h4><?= __('Related Layoutcategories') ?></h4>
        <?php if (!empty($itemcategory->layoutcategories)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Itemcategory Id') ?></th>
                <th scope="col"><?= __('Layout Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Compare') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemcategory->layoutcategories as $layoutcategories): ?>
            <tr>
                <td><?= h($layoutcategories->id) ?></td>
                <td><?= h($layoutcategories->itemcategory_id) ?></td>
                <td><?= h($layoutcategories->layout_id) ?></td>
                <td><?= h($layoutcategories->qty) ?></td>
                <td><?= h($layoutcategories->compare) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Layoutcategories', 'action' => 'view', $layoutcategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Layoutcategories', 'action' => 'edit', $layoutcategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Layoutcategories', 'action' => 'delete', $layoutcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategories->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Itemcategory'), ['action' => 'edit', $itemcategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itemcategory'), ['action' => 'delete', $itemcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>