<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Position $position
  */
?>

<div class="positions view">
    <h3><?= h($position->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($position->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($position->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Layouts') ?>">
        <h4><?= __('Related Layouts') ?></h4>
        <?php if (!empty($position->layouts)): ?>
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
            <?php foreach ($position->layouts as $layouts): ?>
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
        <?php if (!empty($position->positionbranches)): ?>
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
            <?php foreach ($position->positionbranches as $positionbranches): ?>
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
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layouts'), ['controller' => 'Layouts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layout'), ['controller' => 'Layouts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?> </li>
    </ul>
</nav>