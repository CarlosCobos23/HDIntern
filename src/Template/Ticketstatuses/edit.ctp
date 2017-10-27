<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketstatuses form">
	<h3><?= __('Edit Ticketstatus') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketstatus) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('value_order');
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
                ['action' => 'delete', $ticketstatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
    </ul>
</nav>