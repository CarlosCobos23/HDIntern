<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketsfile[]|\Cake\Collection\CollectionInterface $ticketsfiles
  */
?>

<div class="ticketsfiles index">
    <h3><?= __('Ticketsfiles') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketsfile'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketsfiles as $ticketsfile): ?>
            <tr>
                <td><?= $this->Number->format($ticketsfile->id) ?></td>
                <td><?= h($ticketsfile->name) ?></td>
                <td><?= $ticketsfile->has('ticket') ? $this->Html->link($ticketsfile->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketsfile->ticket->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketsfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketsfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfile->id)]) ?>
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
        <li><?= $this->Html->link(__('New Ticketsfile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>