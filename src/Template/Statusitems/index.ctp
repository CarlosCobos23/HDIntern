<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Statusitem[]|\Cake\Collection\CollectionInterface $statusitems
  */
?>

<div class="statusitems index">
    <h3><?= __('Statusitems') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Statusitem'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statusitems as $statusitem): ?>
            <tr>
                <td><?= $this->Number->format($statusitem->id) ?></td>
                <td><?= h($statusitem->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statusitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusitem->id)]) ?>
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
        <li><?= $this->Html->link(__('New Statusitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
    </ul>
</nav>