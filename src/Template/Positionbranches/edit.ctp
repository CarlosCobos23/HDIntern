<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positionbranches form">
	<h3><?= __('Edit Positionbranch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positionbranches'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($positionbranch) ?>
        <?php
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
            echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);
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
                ['action' => 'delete', $positionbranch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>