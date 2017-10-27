<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasontemplates form">
	<h3><?= __('Edit Movereasontemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($movereasontemplate) ?>
        <?php
            echo $this->Form->control('template');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true]);
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
                ['action' => 'delete', $movereasontemplate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movereasons'), ['controller' => 'Movereasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereason'), ['controller' => 'Movereasons', 'action' => 'add']) ?></li>
    </ul>
</nav>