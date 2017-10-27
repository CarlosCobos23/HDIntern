<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Movereasontemplate[]|\Cake\Collection\CollectionInterface $movereasontemplates
  */
?>

<div class="movereasontemplates index">
    <h3><?= __('Movereasontemplates') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Movereasontemplate'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('template') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movereason_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movereasontemplates as $movereasontemplate): ?>
            <tr>
                <td><?= $this->Number->format($movereasontemplate->id) ?></td>
                <td><?= h($movereasontemplate->template) ?></td>
                <td><?= h($movereasontemplate->created) ?></td>
                <td><?= h($movereasontemplate->modified) ?></td>
                <td><?= $movereasontemplate->has('user') ? $this->Html->link($movereasontemplate->user->name, ['controller' => 'Users', 'action' => 'view', $movereasontemplate->user->id]) : '' ?></td>
                <td><?= $movereasontemplate->has('movereason') ? $this->Html->link($movereasontemplate->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $movereasontemplate->movereason->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movereasontemplate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movereasontemplate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movereasontemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplate->id)]) ?>
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
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movereasons'), ['controller' => 'Movereasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereason'), ['controller' => 'Movereasons', 'action' => 'add']) ?></li>
    </ul>
</nav>