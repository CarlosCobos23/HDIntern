<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickets form">
	<h3><?= __('Clone Ticket') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticket) ?>
        <?php
            echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true]);
            echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses, 'empty' => true]);
            echo $this->Form->control('source_id', ['options' => $sources, 'empty' => true]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('solution');
            echo $this->Form->control('resolution');
            echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('user_autor');
            echo $this->Form->control('user_requeried');
            echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true]);
            echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true]);
            echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true]);
            echo $this->Form->control('parent_id');
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true]);
        ?>
	
    <?= $this->Form->button(__('Clonar')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>

