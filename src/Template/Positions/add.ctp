<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positions form">
	<h3><?= __('Add Position') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($position) ?>
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
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?></li>
    </ul>
</nav>