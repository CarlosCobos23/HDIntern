<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Articlefile[]|\Cake\Collection\CollectionInterface $articlefiles
  */
?>

<div class="articlefiles index">
    <h3><?= __('Articlefiles') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Articlefile'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articlefiles as $articlefile): ?>
            <tr>
                <td><?= $this->Number->format($articlefile->id) ?></td>
                <td><?= h($articlefile->name) ?></td>
                <td><?= $articlefile->has('article') ? $this->Html->link($articlefile->article->title, ['controller' => 'Articles', 'action' => 'view', $articlefile->article->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articlefile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlefile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlefile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefile->id)]) ?>
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
        <li><?= $this->Html->link(__('New Articlefile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>