<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articles form">
	<h3><?= __('Edit Article') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($article) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('answer');
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('selected');
            echo $this->Form->control('roles._ids', ['options' => $roles]);
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
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articlefiles'), ['controller' => 'Articlefiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articlefile'), ['controller' => 'Articlefiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>