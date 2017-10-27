<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user  */
?>

<div class="users view">
    <h3><?= h($user->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
			<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Positionbranch') ?></th>
            <td><?= $user->has('positionbranch') ? $this->Html->link($user->positionbranch->name, ['controller' => 'Positionbranches', 'action' => 'view', $user->positionbranch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statususer') ?></th>
            <td><?= $user->has('statususer') ? $this->Html->link($user->statususer->name, ['controller' => 'Statususers', 'action' => 'view', $user->statususer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Articles') ?>">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($user->articles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Answer') ?></th>
                <th scope="col"><?= __('Hdcategory Id') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Selected') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($user->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->title) ?></td>
                <td><?= h($articles->answer) ?></td>
                <td><?= h($articles->hdcategory_id) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td><?= h($articles->user_id) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Internalnotes') ?>">
        <h4><?= __('Related Internalnotes') ?></h4>
        <?php if (!empty($user->internalnotes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($user->internalnotes as $internalnotes): ?>
            <tr>
                <td><?= h($internalnotes->id) ?></td>
                <td><?= h($internalnotes->name) ?></td>
                <td><?= h($internalnotes->ticket_id) ?></td>
                <td><?= h($internalnotes->user_id) ?></td>
                <td><?= h($internalnotes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Internalnotes', 'action' => 'view', $internalnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Internalnotes', 'action' => 'edit', $internalnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Internalnotes', 'action' => 'delete', $internalnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Movereasontemplates') ?>">
        <h4><?= __('Related Movereasontemplates') ?></h4>
        <?php if (!empty($user->movereasontemplates)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Template') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Movereason Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($user->movereasontemplates as $movereasontemplates): ?>
            <tr>
                <td><?= h($movereasontemplates->id) ?></td>
                <td><?= h($movereasontemplates->template) ?></td>
                <td><?= h($movereasontemplates->created) ?></td>
                <td><?= h($movereasontemplates->modified) ?></td>
                <td><?= h($movereasontemplates->user_id) ?></td>
                <td><?= h($movereasontemplates->movereason_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Movereasontemplates', 'action' => 'view', $movereasontemplates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Movereasontemplates', 'action' => 'edit', $movereasontemplates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movereasontemplates', 'action' => 'delete', $movereasontemplates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movereasontemplates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Publicnotes') ?>">
        <h4><?= __('Related Publicnotes') ?></h4>
        <?php if (!empty($user->publicnotes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($user->publicnotes as $publicnotes): ?>
            <tr>
                <td><?= h($publicnotes->id) ?></td>
                <td><?= h($publicnotes->name) ?></td>
                <td><?= h($publicnotes->ticket_id) ?></td>
                <td><?= h($publicnotes->user_id) ?></td>
                <td><?= h($publicnotes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publicnotes', 'action' => 'view', $publicnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publicnotes', 'action' => 'edit', $publicnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publicnotes', 'action' => 'delete', $publicnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Stockmoves') ?>">
        <h4><?= __('Related Stockmoves') ?></h4>
        <?php if (!empty($user->stockmoves)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Warehouse Id') ?></th>
                <th scope="col"><?= __('Warehouse 2') ?></th>
                <th scope="col"><?= __('Receiver') ?></th>
                <th scope="col"><?= __('Receiver Sign') ?></th>
                <th scope="col"><?= __('Movereason Id') ?></th>
                <th scope="col"><?= __('Shipper Id') ?></th>
                <th scope="col"><?= __('Guide Number') ?></th>
                <th scope="col"><?= __('Packages') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Confirmed') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($user->stockmoves as $stockmoves): ?>
            <tr>
                <td><?= h($stockmoves->id) ?></td>
                <td><?= h($stockmoves->warehouse_id) ?></td>
                <td><?= h($stockmoves->warehouse_2) ?></td>
                <td><?= h($stockmoves->receiver) ?></td>
                <td><?= h($stockmoves->receiver_sign) ?></td>
                <td><?= h($stockmoves->movereason_id) ?></td>
                <td><?= h($stockmoves->shipper_id) ?></td>
                <td><?= h($stockmoves->guide_number) ?></td>
                <td><?= h($stockmoves->packages) ?></td>
                <td><?= h($stockmoves->user_id) ?></td>
                <td><?= h($stockmoves->notes) ?></td>
                <td><?= h($stockmoves->confirmed) ?></td>
                <td><?= h($stockmoves->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stockmoves', 'action' => 'view', $stockmoves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stockmoves', 'action' => 'edit', $stockmoves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stockmoves', 'action' => 'delete', $stockmoves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmoves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Ticketlogs') ?>">
        <h4><?= __('Related Ticketlogs') ?></h4>
        <?php if (!empty($user->ticketlogs)): ?>
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
            <?php foreach ($user->ticketlogs as $ticketlogs): ?>
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
        <?php if (!empty($user->tickets)): ?>
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
            <?php foreach ($user->tickets as $tickets): ?>
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
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positionbranches'), ['controller' => 'Positionbranches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['controller' => 'Positionbranches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statususers'), ['controller' => 'Statususers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statususer'), ['controller' => 'Statususers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movereasontemplates'), ['controller' => 'Movereasontemplates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movereasontemplate'), ['controller' => 'Movereasontemplates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>