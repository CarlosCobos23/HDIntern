<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketimpacts form">
	<h3><?= __('Edit Ticketimpact') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketimpacts'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketimpact) ?>
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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketimpact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketimpact->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketimpacts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>