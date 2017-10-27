<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Publicnote[]|\Cake\Collection\CollectionInterface $publicnotes
  */
?>

<div class="publicnotes index">
    <h3><?= __('Publicnotes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Publicnote'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publicnotes as $publicnote): ?>
            <tr>
                <td><?= $this->Number->format($publicnote->id) ?></td>
                <td><?= h($publicnote->name) ?></td>
                <td><?= $publicnote->has('ticket') ? $this->Html->link($publicnote->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $publicnote->ticket->id]) : '' ?></td>
                <td><?= $publicnote->has('user') ? $this->Html->link($publicnote->user->name, ['controller' => 'Users', 'action' => 'view', $publicnote->user->id]) : '' ?></td>
                <td><?= h($publicnote->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publicnote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publicnote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publicnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicnote->id)]) ?>
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
        <li><?= $this->Html->link(__('New Publicnote'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>