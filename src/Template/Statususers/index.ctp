<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Statususer[]|\Cake\Collection\CollectionInterface $statususers
  */
?>

<div class="statususers index">
    <h3><?= __('Statususers') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Statususer'), ['action' => 'add']) ?></li>
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
            <?php foreach ($statususers as $statususer): ?>
            <tr>
                <td><?= $this->Number->format($statususer->id) ?></td>
                <td><?= h($statususer->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statususer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statususer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statususer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statususer->id)]) ?>
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
        <li><?= $this->Html->link(__('New Statususer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>