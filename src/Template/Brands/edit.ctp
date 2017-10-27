<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="brands form">
	<h3><?= __('Edit Brand') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($brand) ?>
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
                ['action' => 'delete', $brand->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>