<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdtemplate form">
	<h3><?= __('Edit Hdtemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($hdtemplate) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories]);
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
                ['action' => 'delete', $hdtemplate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hdtemplate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>