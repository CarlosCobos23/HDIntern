<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ArticlesRole $articlesRole
  */
?>

<div class="articlesRoles view">
    <h3><?= h($articlesRole->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Articles Role'), ['action' => 'delete', $articlesRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesRole->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Articles Role'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Articles Role'), ['action' => 'edit', $articlesRole->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $articlesRole->has('article') ? $this->Html->link($articlesRole->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesRole->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $articlesRole->has('role') ? $this->Html->link($articlesRole->role->name, ['controller' => 'Roles', 'action' => 'view', $articlesRole->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articlesRole->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articles Role'), ['action' => 'edit', $articlesRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articles Role'), ['action' => 'delete', $articlesRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articles Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>