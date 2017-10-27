<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hdtemplate[]|\Cake\Collection\CollectionInterface $hdtemplate
  */
?>

<div class="hdtemplate index">
    <h3><?= __('Hdtemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Hdtemplate'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hdcategory_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hdtemplate as $hdtemplate): ?>
            <tr>
                <td><?= $this->Number->format($hdtemplate->id) ?></td>
                <td><?= h($hdtemplate->title) ?></td>
                <td><?= $hdtemplate->has('hdcategory') ? $this->Html->link($hdtemplate->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdtemplate->hdcategory->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hdtemplate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hdtemplate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hdtemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdtemplate->id)]) ?>
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
        <li><?= $this->Html->link(__('New Hdtemplate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>