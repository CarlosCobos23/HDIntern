<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Publicnote $publicnote
  */
?>

<div class="publicnotes view">
    <h3><?= h($publicnote->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Publicnote'), ['action' => 'delete', $publicnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicnote->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Publicnote'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Publicnotes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Publicnote'), ['action' => 'edit', $publicnote->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($publicnote->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $publicnote->has('ticket') ? $this->Html->link($publicnote->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $publicnote->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $publicnote->has('user') ? $this->Html->link($publicnote->user->name, ['controller' => 'Users', 'action' => 'view', $publicnote->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publicnote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($publicnote->created) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicnote'), ['action' => 'edit', $publicnote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicnote'), ['action' => 'delete', $publicnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicnote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicnote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>