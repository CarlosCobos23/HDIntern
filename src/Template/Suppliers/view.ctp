<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Supplier $supplier
  */
?>

<div class="suppliers view">
    <h3><?= h($supplier->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($supplier->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supplier->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Invoices') ?>">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($supplier->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Supplier Id') ?></th>
                <th scope="col"><?= __('Pdf') ?></th>
                <th scope="col"><?= __('Xml') ?></th>
                <th scope="col"><?= __('Purchase Order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($supplier->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->number) ?></td>
                <td><?= h($invoices->supplier_id) ?></td>
                <td><?= h($invoices->pdf) ?></td>
                <td><?= h($invoices->xml) ?></td>
                <td><?= h($invoices->purchase_order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
    </ul>
</nav>