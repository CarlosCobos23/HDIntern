<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemcategory[]|\Cake\Collection\CollectionInterface $itemcategories
  */
?>

<div class="itemcategories index">
    <h3><?= __('Itemcategories') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Itemcategory'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemcategories as $itemcategory): ?>
            <tr>
                <td><?= $this->Number->format($itemcategory->id) ?></td>
                <td><?= h($itemcategory->name) ?></td>
                <td><?= $itemcategory->has('parent_itemcategory') ? $this->Html->link($itemcategory->parent_itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $itemcategory->parent_itemcategory->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcategory->id)]) ?>
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
        <li><?= $this->Html->link(__('New Itemcategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>