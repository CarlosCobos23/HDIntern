<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="statususers form">
	<h3><?= __('Edit Statususer') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($statususer) ?>
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
                ['action' => 'delete', $statususer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statususer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>