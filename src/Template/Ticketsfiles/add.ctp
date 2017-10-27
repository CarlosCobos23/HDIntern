<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketsfiles form">
	<h3><?= __('Add Ticketsfile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketsfile) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>