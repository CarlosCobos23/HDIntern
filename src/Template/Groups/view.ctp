<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Group $group
  */
?>

<div class="groups view">
    <h3><?= h($group->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($group->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Ticketlogs') ?>">
        <h4><?= __('Related Ticketlogs') ?></h4>
        <?php if (!empty($group->ticketlogs)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('User Transfer') ?></th>
                <th scope="col"><?= __('Group Transfer') ?></th>
                <th scope="col"><?= __('New Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Coments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($group->ticketlogs as $ticketlogs): ?>
            <tr>
                <td><?= h($ticketlogs->id) ?></td>
                <td><?= h($ticketlogs->ticket_id) ?></td>
                <td><?= h($ticketlogs->user_id) ?></td>
                <td><?= h($ticketlogs->group_id) ?></td>
                <td><?= h($ticketlogs->user_transfer) ?></td>
                <td><?= h($ticketlogs->group_transfer) ?></td>
                <td><?= h($ticketlogs->new_status) ?></td>
                <td><?= h($ticketlogs->created) ?></td>
                <td><?= h($ticketlogs->coments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketlogs', 'action' => 'view', $ticketlogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketlogs', 'action' => 'edit', $ticketlogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketlogs', 'action' => 'delete', $ticketlogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketlogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Tickets') ?>">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($group->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tickettype Id') ?></th>
                <th scope="col"><?= __('Ticket Status Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Solution') ?></th>
                <th scope="col"><?= __('Resolution') ?></th>
                <th scope="col"><?= __('Itemcode Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('User Autor') ?></th>
                <th scope="col"><?= __('User Requeried') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ticketimpact Id') ?></th>
                <th scope="col"><?= __('Ticketurgency Id') ?></th>
                <th scope="col"><?= __('Ticketpriority Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Hdcategory Id') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($group->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->tickettype_id) ?></td>
                <td><?= h($tickets->ticket_status_id) ?></td>
                <td><?= h($tickets->source_id) ?></td>
                <td><?= h($tickets->title) ?></td>
                <td><?= h($tickets->description) ?></td>
                <td><?= h($tickets->solution) ?></td>
                <td><?= h($tickets->resolution) ?></td>
                <td><?= h($tickets->itemcode_id) ?></td>
                <td><?= h($tickets->user_id) ?></td>
                <td><?= h($tickets->group_id) ?></td>
                <td><?= h($tickets->user_autor) ?></td>
                <td><?= h($tickets->user_requeried) ?></td>
                <td><?= h($tickets->created) ?></td>
                <td><?= h($tickets->ticketimpact_id) ?></td>
                <td><?= h($tickets->ticketurgency_id) ?></td>
                <td><?= h($tickets->ticketpriority_id) ?></td>
                <td><?= h($tickets->parent_id) ?></td>
                <td><?= h($tickets->hdcategory_id) ?></td>
                <td><?= h($tickets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Users') ?>">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($group->users)): ?>
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
            <?php foreach ($group->users as $users): ?>
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
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>