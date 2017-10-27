<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlefiles form">
	<h3><?= __('Edit Articlefile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($articlefile) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
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
                ['action' => 'delete', $articlefile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlefile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>