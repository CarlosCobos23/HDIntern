<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketstatus $ticketstatus
  */
?>

<div class="ticketstatuses view">
    <h3><?= h($ticketstatus->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketstatus'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketstatus'), ['action' => 'edit', $ticketstatus->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticketstatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value Order') ?></th>
            <td><?= $this->Number->format($ticketstatus->value_order) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticketstatus'), ['action' => 'edit', $ticketstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticketstatus'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>