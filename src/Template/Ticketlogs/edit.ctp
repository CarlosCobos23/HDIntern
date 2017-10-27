<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketlogs form">
	<h3><?= __('Edit Ticketlog') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketlog) ?>
        <?php
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('user_transfer');
            echo $this->Form->control('group_transfer');
            echo $this->Form->control('new_status');
            echo $this->Form->control('coments');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketlog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketlog->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>