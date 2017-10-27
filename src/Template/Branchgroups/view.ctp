<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Branchgroup $branchgroup
  */
?>

<div class="branchgroups view">
    <h3><?= h($branchgroup->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Branchgroup'), ['action' => 'delete', $branchgroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchgroup->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Branchgroup'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Branchgroup'), ['action' => 'edit', $branchgroup->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($branchgroup->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($branchgroup->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Branches') ?>">
        <h4><?= __('Related Branches') ?></h4>
        <?php if (!empty($branchgroup->branches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Branchgroup Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branchgroup->branches as $branches): ?>
            <tr>
                <td><?= h($branches->id) ?></td>
                <td><?= h($branches->name) ?></td>
                <td><?= h($branches->branchgroup_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Branches', 'action' => 'view', $branches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Branches', 'action' => 'edit', $branches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Branches', 'action' => 'delete', $branches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branches->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Branchgroup'), ['action' => 'edit', $branchgroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Branchgroup'), ['action' => 'delete', $branchgroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchgroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?> </li>
    </ul>
</nav>