<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="invoices form">
	<h3><?= __('Add Invoice') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($invoice) ?>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('supplier_id', ['options' => $suppliers, 'empty' => true]);
            echo $this->Form->control('pdf');
            echo $this->Form->control('xml');
            echo $this->Form->control('purchase_order');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
    </ul>
</nav>