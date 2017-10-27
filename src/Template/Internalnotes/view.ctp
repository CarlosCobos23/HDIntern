<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Internalnote $internalnote
  */
?>

<div class="internalnotes view">
    <h3><?= h($internalnote->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Internalnote'), ['action' => 'delete', $internalnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalnote->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Internalnote'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Internalnotes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Internalnote'), ['action' => 'edit', $internalnote->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($internalnote->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $internalnote->has('ticket') ? $this->Html->link($internalnote->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $internalnote->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $internalnote->has('user') ? $this->Html->link($internalnote->user->name, ['controller' => 'Users', 'action' => 'view', $internalnote->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internalnote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($internalnote->created) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internalnote'), ['action' => 'edit', $internalnote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internalnote'), ['action' => 'delete', $internalnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalnote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internalnote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>