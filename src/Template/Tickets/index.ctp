<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
  */
?>

<div class="tickets index">
    <h3><?= __('Tickets') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>

		</ul>
	</div>
  <?= $this->Html->link(__('Export to PDF'), ['action' => 'index', '_ext' => 'pdf']); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickettype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_requeried') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketimpact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketurgency_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketpriority_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hdcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($tickets as $ticket):

              $color= $this->Html->style([
                'background-color' => $ticket->tickettype->color,
                'color' => 'white'

              ]);


              $viewbtn= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]);
              $editbtn= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]);
              $deletebtn= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]);

              echo $this->Html->tableCells(
                [
                  [$this->Number->format($ticket->id),
                  $ticket->has('tickettype') ? $this->Html->link($ticket->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticket->tickettype->id]) : '',
                  $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticket->ticket_status->id]) : '',
                  $ticket->has('source') ? $this->Html->link($ticket->source->title, ['controller' => 'Sources', 'action' => 'view', $ticket->source->id]) : '',
                  h($ticket->title),
                  h($ticket->description),
                  h($ticket->solution),
                  $ticket->has('itemcode') ? $this->Html->link($ticket->itemcode->id, ['controller' => 'Itemcodes', 'action' => 'view', $ticket->itemcode->id]) : '',
                  $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '',
                  $ticket->has('group') ? $this->Html->link($ticket->group->name, ['controller' => 'Groups', 'action' => 'view', $ticket->group->id]) : '',
                  $this->Number->format($ticket->user_autor),
                  $this->Number->format($ticket->user_requeried),
                  h($ticket->created),
                  $ticket->has('ticketimpact') ? $this->Html->link($ticket->ticketimpact->name, ['controller' => 'Ticketimpacts', 'action' => 'view', $ticket->ticketimpact->id]) : '',
                  $ticket->has('ticketurgency') ? $this->Html->link($ticket->ticketurgency->name, ['controller' => 'Ticketurgencies', 'action' => 'view', $ticket->ticketurgency->id]) : '',
                  $ticket->has('ticketpriority') ? $this->Html->link($ticket->ticketpriority->name, ['controller' => 'Ticketpriorities', 'action' => 'view', $ticket->ticketpriority->id]) : '',
                  $this->Number->format($ticket->parent_id),
                  $ticket->has('hdcategory') ? $this->Html->link($ticket->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $ticket->hdcategory->id]) : '',
                  h($ticket->modified),
                  $viewbtn." ".$editbtn." ".$deletebtn
                  ],
                  [ ]
                ],
                ['style' => $color,'class' => 'actions']

              );


            ?>

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

        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketimpact'), ['controller' => 'Ticketimpacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketurgency'), ['controller' => 'Ticketurgencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketpriority'), ['controller' => 'Ticketpriorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketsfile'), ['controller' => 'Ticketsfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
