<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Movereasontemplate $movereasontemplate
  */
?>

<div class="movereasontemplates view">
    <h3><?= h($movereasontemplate->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Movereasontemplate'), ['action' => 'delete', $movereasontemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplate->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Movereasontemplate'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Movereasontemplate'), ['action' => 'edit', $movereasontemplate->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Template') ?></th>
            <td><?= h($movereasontemplate->template) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $movereasontemplate->has('user') ? $this->Html->link($movereasontemplate->user->name, ['controller' => 'Users', 'action' => 'view', $movereasontemplate->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movereason') ?></th>
            <td><?= $movereasontemplate->has('movereason') ? $this->Html->link($movereasontemplate->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $movereasontemplate->movereason->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movereasontemplate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($movereasontemplate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($movereasontemplate->modified) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movereasontemplate'), ['action' => 'edit', $movereasontemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movereasontemplate'), ['action' => 'delete', $movereasontemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movereasons'), ['controller' => 'Movereasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movereason'), ['controller' => 'Movereasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>