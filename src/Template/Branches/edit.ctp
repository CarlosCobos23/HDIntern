<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branches form">
	<h3><?= __('Edit Branch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($branch) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('branchgroup_id', ['options' => $branchgroups, 'empty' => true]);
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
                ['action' => 'delete', $branch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['controller' => 'Branchgroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Warehouses'), ['controller' => 'Warehouses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Warehouse'), ['controller' => 'Warehouses', 'action' => 'add']) ?></li>
    </ul>
</nav>