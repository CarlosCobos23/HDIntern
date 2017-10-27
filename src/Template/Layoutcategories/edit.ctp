<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="layoutcategories form">
	<h3><?= __('Edit Layoutcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Layoutcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($layoutcategory) ?>
        <?php
            echo $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true]);
            echo $this->Form->control('layout_id', ['options' => $layouts, 'empty' => true]);
            echo $this->Form->control('qty');
            echo $this->Form->control('compare');
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
                ['action' => 'delete', $layoutcategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $layoutcategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Itemcategories'), ['controller' => 'Itemcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcategory'), ['controller' => 'Itemcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?></li>
    </ul>
</nav>