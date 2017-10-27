<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hdtemplate $hdtemplate
  */
?>

<div class="hdtemplate view">
    <h3><?= h($hdtemplate->title) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Hdtemplate'), ['action' => 'delete', $hdtemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdtemplate->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Hdtemplate'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Hdtemplate'), ['action' => 'edit', $hdtemplate->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($hdtemplate->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hdcategory') ?></th>
            <td><?= $hdtemplate->has('hdcategory') ? $this->Html->link($hdtemplate->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdtemplate->hdcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hdtemplate->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hdtemplate'), ['action' => 'edit', $hdtemplate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hdtemplate'), ['action' => 'delete', $hdtemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdtemplate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hdtemplate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>