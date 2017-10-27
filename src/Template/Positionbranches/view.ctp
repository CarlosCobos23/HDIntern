<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positionbranch $positionbranch
  */
?>

<div class="positionbranches view">
    <h3><?= h($positionbranch->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Positionbranch'), ['action' => 'delete', $positionbranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranch->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Positionbranch'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positionbranches'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Positionbranch'), ['action' => 'edit', $positionbranch->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $positionbranch->has('branch') ? $this->Html->link($positionbranch->branch->name, ['controller' => 'Branches', 'action' => 'view', $positionbranch->branch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $positionbranch->has('position') ? $this->Html->link($positionbranch->position->name, ['controller' => 'Positions', 'action' => 'view', $positionbranch->position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($positionbranch->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($positionbranch->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Itemcodes') ?>">
        <h4><?= __('Related Itemcodes') ?></h4>
        <?php if (!empty($positionbranch->itemcodes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Statusitem Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Warranty') ?></th>
                <th scope="col"><?= __('Positionbranch Id') ?></th>
                <th scope="col"><?= __('Service Tag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($positionbranch->itemcodes as $itemcodes): ?>
            <tr>
                <td><?= h($itemcodes->id) ?></td>
                <td><?= h($itemcodes->item_id) ?></td>
                <td><?= h($itemcodes->serial) ?></td>
                <td><?= h($itemcodes->invoice_id) ?></td>
                <td><?= h($itemcodes->statusitem_id) ?></td>
                <td><?= h($itemcodes->created) ?></td>
                <td><?= h($itemcodes->warranty) ?></td>
                <td><?= h($itemcodes->positionbranch_id) ?></td>
                <td><?= h($itemcodes->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcodes', 'action' => 'view', $itemcodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcodes', 'action' => 'edit', $itemcodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcodes', 'action' => 'delete', $itemcodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcodes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Users') ?>">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($positionbranch->users)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Positionbranch Id') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Statususer Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($positionbranch->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->positionbranch_id) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->statususer_id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->role_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Positionbranch'), ['action' => 'edit', $positionbranch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Positionbranch'), ['action' => 'delete', $positionbranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>