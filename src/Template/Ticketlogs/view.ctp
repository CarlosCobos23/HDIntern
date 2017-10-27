<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketlog $ticketlog
  */
?>

<div class="ticketlogs view">
    <h3><?= h($ticketlog->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketlog'), ['action' => 'delete', $ticketlog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketlog->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketlog'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketlog'), ['action' => 'edit', $ticketlog->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $ticketlog->has('ticket') ? $this->Html->link($ticketlog->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketlog->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticketlog->has('user') ? $this->Html->link($ticketlog->user->name, ['controller' => 'Users', 'action' => 'view', $ticketlog->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $ticketlog->has('group') ? $this->Html->link($ticketlog->group->name, ['controller' => 'Groups', 'action' => 'view', $ticketlog->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New Status') ?></th>
            <td><?= h($ticketlog->new_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketlog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Transfer') ?></th>
            <td><?= $this->Number->format($ticketlog->user_transfer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Transfer') ?></th>
            <td><?= $this->Number->format($ticketlog->group_transfer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticketlog->created) ?></td>
        </tr>
    </table>
	</div>
    <div class="row">
        <h4><?= __('Coments') ?></h4>
        <?= $this->Text->autoParagraph(h($ticketlog->coments)); ?>
    </div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticketlog'), ['action' => 'edit', $ticketlog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticketlog'), ['action' => 'delete', $ticketlog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketlog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>