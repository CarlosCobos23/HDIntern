<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket $ticket
  */
?>
<?= $this->element('helpdesktools') ?>
<div class="tickets view">
    <h3><?= h($ticket->title) ?></h3>
  <h4>   <?= $this->Html->link(__('Export to PDF'), ['action' => 'view', $ticket->id, '_ext' => 'pdf']); ?></h4>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tickettype') ?></th>
            <td><?= $ticket->has('tickettype') ? $this->Html->link($ticket->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticket->tickettype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Status') ?></th>
            <td><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $ticket->has('source') ? $this->Html->link($ticket->source->title, ['controller' => 'Sources', 'action' => 'view', $ticket->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($ticket->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($ticket->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solution') ?></th>
            <td><?= h($ticket->solution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itemcode') ?></th>
            <td><?= $ticket->has('itemcode') ? $this->Html->link($ticket->itemcode->id, ['controller' => 'Itemcodes', 'action' => 'view', $ticket->itemcode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $ticket->has('group') ? $this->Html->link($ticket->group->name, ['controller' => 'Groups', 'action' => 'view', $ticket->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketimpact') ?></th>
            <td><?= $ticket->has('ticketimpact') ? $this->Html->link($ticket->ticketimpact->name, ['controller' => 'Ticketimpacts', 'action' => 'view', $ticket->ticketimpact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketurgency') ?></th>
            <td><?= $ticket->has('ticketurgency') ? $this->Html->link($ticket->ticketurgency->name, ['controller' => 'Ticketurgencies', 'action' => 'view', $ticket->ticketurgency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketpriority') ?></th>
            <td><?= $ticket->has('ticketpriority') ? $this->Html->link($ticket->ticketpriority->name, ['controller' => 'Ticketpriorities', 'action' => 'view', $ticket->ticketpriority->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hdcategory') ?></th>
            <td><?= $ticket->has('hdcategory') ? $this->Html->link($ticket->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $ticket->hdcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Autor') ?></th>
            <td><?= $this->Number->format($ticket->user_autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Requeried') ?></th>
            <td><?= $this->Number->format($ticket->user_requeried) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Id') ?></th>
            <td><?= $this->Number->format($ticket->parent_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticket->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ticket->modified) ?></td>
        </tr>
    </table>
	</div>
    <div class="row">
        <h4><?= __('Resolution') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->resolution)); ?>
    </div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Internalnotes') ?>">
        <h4><?= __('Related Internalnotes') ?></h4>
        <?php if (!empty($ticket->internalnotes)): ?>
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
            <?php foreach ($ticket->internalnotes as $internalnotes): ?>
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
    <div class="related" title="<?= __('Publicnotes') ?>">
        <h4><?= __('Related Publicnotes') ?></h4>
        <?php if (!empty($ticket->publicnotes)): ?>
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
            <?php foreach ($ticket->publicnotes as $publicnotes): ?>
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
    <div class="related" title="<?= __('Ticketlogs') ?>">
        <h4><?= __('Related Ticketlogs') ?></h4>
        <?php if (!empty($ticket->ticketlogs)): ?>
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
            <?php foreach ($ticket->ticketlogs as $ticketlogs): ?>
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
    <div class="related" title="<?= __('Ticketsfiles') ?>">
        <h4><?= __('Related Ticketsfiles') ?></h4>
        <?php if (!empty($ticket->ticketsfiles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->ticketsfiles as $ticketsfiles): ?>
            <tr>
                <td><?= h($ticketsfiles->id) ?></td>
                <td><?= h($ticketsfiles->name) ?></td>
                <td><?= h($ticketsfiles->ticket_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketsfiles', 'action' => 'view', $ticketsfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketsfiles', 'action' => 'edit', $ticketsfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketsfiles', 'action' => 'delete', $ticketsfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfiles->id)]) ?>
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
        <li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketimpact'), ['controller' => 'Ticketimpacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketurgency'), ['controller' => 'Ticketurgencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketpriority'), ['controller' => 'Ticketpriorities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketsfile'), ['controller' => 'Ticketsfiles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
