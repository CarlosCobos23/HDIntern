<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branchgroups form">
	<h3><?= __('Edit Branchgroup') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($branchgroup) ?>
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
                ['action' => 'delete', $branchgroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branchgroup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
    </ul>
</nav>