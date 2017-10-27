<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasons form">
	<h3><?= __('Add Movereason') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasons'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($movereason) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('factor');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movereasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['controller' => 'Movereasontemplates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['controller' => 'Movereasontemplates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
    </ul>
</nav>