<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ArticlesRole[]|\Cake\Collection\CollectionInterface $articlesRoles
  */
?>

<div class="articlesRoles index">
    <h3><?= __('Articles Roles') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Articles Role'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articlesRoles as $articlesRole): ?>
            <tr>
                <td><?= $this->Number->format($articlesRole->id) ?></td>
                <td><?= $articlesRole->has('article') ? $this->Html->link($articlesRole->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesRole->article->id]) : '' ?></td>
                <td><?= $articlesRole->has('role') ? $this->Html->link($articlesRole->role->name, ['controller' => 'Roles', 'action' => 'view', $articlesRole->role->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articlesRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlesRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesRole->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articles Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>