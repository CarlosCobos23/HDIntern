<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="roles form">
	<h3><?= __('Edit Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($role) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('articles._ids', ['options' => $articles]);
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
                ['action' => 'delete', $role->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>