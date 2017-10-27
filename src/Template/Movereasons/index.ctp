<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Movereason[]|\Cake\Collection\CollectionInterface $movereasons
  */
?>

<div class="movereasons index">
    <h3><?= __('Movereasons') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Movereason'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('factor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movereasons as $movereason): ?>
            <tr>
                <td><?= $this->Number->format($movereason->id) ?></td>
                <td><?= h($movereason->name) ?></td>
                <td><?= h($movereason->factor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movereason->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movereason->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movereason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereason->id)]) ?>
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
        <li><?= $this->Html->link(__('New Movereason'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['controller' => 'Movereasontemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['controller' => 'Movereasontemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
    </ul>
</nav>