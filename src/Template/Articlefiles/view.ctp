<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Articlefile $articlefile
  */
?>

<div class="articlefiles view">
    <h3><?= h($articlefile->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Articlefile'), ['action' => 'delete', $articlefile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefile->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Articlefile'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Articlefile'), ['action' => 'edit', $articlefile->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($articlefile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $articlefile->has('article') ? $this->Html->link($articlefile->article->title, ['controller' => 'Articles', 'action' => 'view', $articlefile->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articlefile->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articlefile'), ['action' => 'edit', $articlefile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articlefile'), ['action' => 'delete', $articlefile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articlefile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>