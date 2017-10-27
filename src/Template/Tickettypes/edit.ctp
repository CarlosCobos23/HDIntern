<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickettypes form">
	<h3><?= __('Edit Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($tickettype) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('rank');
            echo $this->Form->control('color');
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
                ['action' => 'delete', $tickettype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>