<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Layoutcategory[]|\Cake\Collection\CollectionInterface $layoutcategories
  */
?>

<div class="layoutcategories index">
    <h3><?= __('Layoutcategories') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Layoutcategory'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layout_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('compare') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($layoutcategories as $layoutcategory): ?>
            <tr>
                <td><?= $this->Number->format($layoutcategory->id) ?></td>
                <td><?= $layoutcategory->has('itemcategory') ? $this->Html->link($layoutcategory->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $layoutcategory->itemcategory->id]) : '' ?></td>
                <td><?= $layoutcategory->has('layout') ? $this->Html->link($layoutcategory->layout->id, ['controller' => 'Layouts', 'action' => 'view', $layoutcategory->layout->id]) : '' ?></td>
                <td><?= $this->Number->format($layoutcategory->qty) ?></td>
                <td><?= $this->Number->format($layoutcategory->compare) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $layoutcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $layoutcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $layoutcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategory->id)]) ?>
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
        <li><?= $this->Html->link(__('New Layoutcategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?></li>
    </ul>
</nav>