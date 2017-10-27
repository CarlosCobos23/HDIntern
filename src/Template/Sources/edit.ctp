<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="sources form">
	<h3><?= __('Edit Source') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($source) ?>
        <?php
            echo $this->Form->control('title');
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
                ['action' => 'delete', $source->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>