<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form">
	<h3><?= __('Edit User') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($user) ?>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true]);
            echo $this->Form->control('password');
            echo $this->Form->control('statususer_id', ['options' => $statususers, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statususers'), ['controller' => 'Statususers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statususer'), ['controller' => 'Statususers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['controller' => 'Movereasontemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['controller' => 'Movereasontemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>