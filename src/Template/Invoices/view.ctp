<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice $invoice
  */
?>

<div class="invoices view">
    <h3><?= h($invoice->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($invoice->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier') ?></th>
            <td><?= $invoice->has('supplier') ? $this->Html->link($invoice->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $invoice->supplier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pdf') ?></th>
            <td><?= h($invoice->pdf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xml') ?></th>
            <td><?= h($invoice->xml) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchase Order') ?></th>
            <td><?= h($invoice->purchase_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Itemcodes') ?>">
        <h4><?= __('Related Itemcodes') ?></h4>
        <?php if (!empty($invoice->itemcodes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Statusitem Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Warranty') ?></th>
                <th scope="col"><?= __('Positionbranch Id') ?></th>
                <th scope="col"><?= __('Service Tag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($invoice->itemcodes as $itemcodes): ?>
            <tr>
                <td><?= h($itemcodes->id) ?></td>
                <td><?= h($itemcodes->item_id) ?></td>
                <td><?= h($itemcodes->serial) ?></td>
                <td><?= h($itemcodes->invoice_id) ?></td>
                <td><?= h($itemcodes->statusitem_id) ?></td>
                <td><?= h($itemcodes->created) ?></td>
                <td><?= h($itemcodes->warranty) ?></td>
                <td><?= h($itemcodes->positionbranch_id) ?></td>
                <td><?= h($itemcodes->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcodes', 'action' => 'view', $itemcodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcodes', 'action' => 'edit', $itemcodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcodes', 'action' => 'delete', $itemcodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcodes->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>