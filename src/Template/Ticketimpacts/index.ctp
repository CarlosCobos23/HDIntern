<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketimpact[]|\Cake\Collection\CollectionInterface $ticketimpacts
  */
?>

<div class="ticketimpacts index">
    <h3><?= __('Ticketimpacts') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketimpact'), ['action' => 'add']) ?></li>
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
            <?php foreach ($ticketimpacts as $ticketimpact): ?>
            <tr>
                <td><?= $this->Number->format($ticketimpact->id) ?></td>
                <td><?= h($ticketimpact->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketimpact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketimpact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketimpact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketimpact->id)]) ?>
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
        <li><?= $this->Html->link(__('New Ticketimpact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>