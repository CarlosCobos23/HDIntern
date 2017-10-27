<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketsfile $ticketsfile
  */
?>

<div class="ticketsfiles view">
    <h3><?= h($ticketsfile->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketsfile'), ['action' => 'delete', $ticketsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfile->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketsfile'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketsfile'), ['action' => 'edit', $ticketsfile->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticketsfile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $ticketsfile->has('ticket') ? $this->Html->link($ticketsfile->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketsfile->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketsfile->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticketsfile'), ['action' => 'edit', $ticketsfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticketsfile'), ['action' => 'delete', $ticketsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketsfile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>