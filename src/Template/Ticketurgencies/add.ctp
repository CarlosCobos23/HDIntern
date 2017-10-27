<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketurgencies form">
	<h3><?= __('Add Ticketurgency') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketurgencies'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketurgency) ?>
        <?php
            echo $this->Form->control('name');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticketurgencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>