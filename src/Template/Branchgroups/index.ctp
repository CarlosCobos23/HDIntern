<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Branchgroup[]|\Cake\Collection\CollectionInterface $branchgroups
  */
?>

<div class="branchgroups index">
    <h3><?= __('Branchgroups') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Branchgroup'), ['action' => 'add']) ?></li>
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
            <?php foreach ($branchgroups as $branchgroup): ?>
            <tr>
                <td><?= $this->Number->format($branchgroup->id) ?></td>
                <td><?= h($branchgroup->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $branchgroup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branchgroup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branchgroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchgroup->id)]) ?>
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
        <li><?= $this->Html->link(__('New Branchgroup'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
    </ul>
</nav>