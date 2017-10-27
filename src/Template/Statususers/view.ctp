<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Statususer $statususer
  */
?>

<div class="statususers view">
    <h3><?= h($statususer->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Statususer'), ['action' => 'delete', $statususer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statususer->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Statususer'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Statususer'), ['action' => 'edit', $statususer->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($statususer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statususer->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Users') ?>">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($statususer->users)): ?>
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
            <?php foreach ($statususer->users as $users): ?>
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
        <li><?= $this->Html->link(__('Edit Statususer'), ['action' => 'edit', $statususer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statususer'), ['action' => 'delete', $statususer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statususer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statususer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>