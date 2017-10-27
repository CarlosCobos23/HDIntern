<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Layoutcategory $layoutcategory
  */
?>

<div class="layoutcategories view">
    <h3><?= h($layoutcategory->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Layoutcategory'), ['action' => 'delete', $layoutcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategory->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Layoutcategory'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Layoutcategories'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Layoutcategory'), ['action' => 'edit', $layoutcategory->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Itemcategory') ?></th>
            <td><?= $layoutcategory->has('itemcategory') ? $this->Html->link($layoutcategory->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $layoutcategory->itemcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Layout') ?></th>
            <td><?= $layoutcategory->has('layout') ? $this->Html->link($layoutcategory->layout->id, ['controller' => 'Layouts', 'action' => 'view', $layoutcategory->layout->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($layoutcategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($layoutcategory->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Compare') ?></th>
            <td><?= $this->Number->format($layoutcategory->compare) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Layoutcategory'), ['action' => 'edit', $layoutcategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Layoutcategory'), ['action' => 'delete', $layoutcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?> </li>
    </ul>
</nav>