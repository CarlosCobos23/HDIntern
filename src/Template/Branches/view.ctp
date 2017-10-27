<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Branch $branch
  */
?>

<div class="branches view">
    <h3><?= h($branch->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($branch->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branchgroup') ?></th>
            <td><?= $branch->has('branchgroup') ? $this->Html->link($branch->branchgroup->name, ['controller' => 'Branchgroups', 'action' => 'view', $branch->branchgroup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($branch->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Layouts') ?>">
        <h4><?= __('Related Layouts') ?></h4>
        <?php if (!empty($branch->layouts)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col"><?= __('Layout') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->layouts as $layouts): ?>
            <tr>
                <td><?= h($layouts->id) ?></td>
                <td><?= h($layouts->branch_id) ?></td>
                <td><?= h($layouts->position_id) ?></td>
                <td><?= h($layouts->layout) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Layouts', 'action' => 'view', $layouts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Layouts', 'action' => 'edit', $layouts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Layouts', 'action' => 'delete', $layouts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layouts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Positionbranches') ?>">
        <h4><?= __('Related Positionbranches') ?></h4>
        <?php if (!empty($branch->positionbranches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->positionbranches as $positionbranches): ?>
            <tr>
                <td><?= h($positionbranches->id) ?></td>
                <td><?= h($positionbranches->branch_id) ?></td>
                <td><?= h($positionbranches->position_id) ?></td>
                <td><?= h($positionbranches->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positionbranches', 'action' => 'view', $positionbranches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positionbranches', 'action' => 'edit', $positionbranches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positionbranches', 'action' => 'delete', $positionbranches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Warehouses') ?>">
        <h4><?= __('Related Warehouses') ?></h4>
        <?php if (!empty($branch->warehouses)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->warehouses as $warehouses): ?>
            <tr>
                <td><?= h($warehouses->id) ?></td>
                <td><?= h($warehouses->name) ?></td>
                <td><?= h($warehouses->branch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Warehouses', 'action' => 'view', $warehouses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Warehouses', 'action' => 'edit', $warehouses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Warehouses', 'action' => 'delete', $warehouses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouses->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['controller' => 'Branchgroups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Warehouses'), ['controller' => 'Warehouses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Warehouse'), ['controller' => 'Warehouses', 'action' => 'add']) ?> </li>
    </ul>
</nav>