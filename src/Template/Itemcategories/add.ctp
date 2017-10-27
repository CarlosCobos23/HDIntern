<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcategories form">
	<h3><?= __('Add Itemcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($itemcategory) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('parent_id', ['options' => $parentItemcategories, 'empty' => true]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>