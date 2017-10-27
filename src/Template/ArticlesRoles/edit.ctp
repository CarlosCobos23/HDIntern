<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlesRoles form">
	<h3><?= __('Edit Articles Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($articlesRole) ?>
        <?php
            echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
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
                ['action' => 'delete', $articlesRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlesRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>