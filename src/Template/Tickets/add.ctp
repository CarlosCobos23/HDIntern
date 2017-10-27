<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickets form">
	<h3><?= __('Add Ticket') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticket) ?>
        <?php
            echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true]);
            echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses, 'empty' => true]);
            echo $this->Form->control('source_id', ['options' => $sources, 'empty' => true]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('solution');
            echo $this->Form->control('resolution');
            echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('user_autor');
            echo $this->Form->control('user_requeried');
            echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true]);
            echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true]);
            echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true]);
            echo $this->Form->control('parent_id');
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketimpact'), ['controller' => 'Ticketimpacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketurgency'), ['controller' => 'Ticketurgencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketpriority'), ['controller' => 'Ticketpriorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketsfile'), ['controller' => 'Ticketsfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
