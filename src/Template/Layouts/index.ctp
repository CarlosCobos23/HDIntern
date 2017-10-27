<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Layout[]|\Cake\Collection\CollectionInterface $layouts
  */
?>

<div class="layouts index">
    <h3><?= __('Layouts') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layout') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($layouts as $layout): ?>
            <tr>
                <td><?= $this->Number->format($layout->id) ?></td>
                <td><?= $layout->has('branch') ? $this->Html->link($layout->branch->name, ['controller' => 'Branches', 'action' => 'view', $layout->branch->id]) : '' ?></td>
                <td><?= $layout->has('position') ? $this->Html->link($layout->position->name, ['controller' => 'Positions', 'action' => 'view', $layout->position->id]) : '' ?></td>
                <td><?= $this->Number->format($layout->layout) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $layout->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $layout->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $layout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]) ?>
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
        <li><?= $this->Html->link(__('New Layout'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>