<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shippers form">
	<h3><?= __('Edit Shipper') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($shipper) ?>
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
                ['action' => 'delete', $shipper->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
    </ul>
</nav>