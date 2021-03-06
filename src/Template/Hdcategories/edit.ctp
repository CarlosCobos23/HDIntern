<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdcategories form">
	<h3><?= __('Edit Hdcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($hdcategory) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('parent_id');
            echo $this->Form->control('lft');
            echo $this->Form->control('rght');
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
                ['action' => 'delete', $hdcategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
    </ul>
</nav>