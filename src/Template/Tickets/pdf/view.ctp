<div class="tickets view">
<h2>Ticket</h2>
    <dl>
        <dt><?= __('Id') ?></dt>
        <dd>
            <?= $this->Number->format($ticket->id) ?>
            &nbsp;
        </dd>
        <dt><?= __('Nombre') ?></dt>
        <dd>
            <?= h($ticket->title) ?>
            &nbsp;
        </dd>
        <dt><?= __('Tipo') ?></dt>
        <dd>
            <?= h($ticket->tickettype->name) ?>
            &nbsp;
        </dd>
        <dt><?= __('Estado') ?></dt>
        <dd>
            <?= h($ticket->ticket_status->name) ?>
            &nbsp;
        </dd>
        <dt><?= __('Fuente') ?></dt>
        <dd>
            <?= h($ticket->source->title) ?>
            &nbsp;
        </dd>
        <dt><?= __('Descripcion') ?></dt>
        <dd>
            <?= h($ticket->description) ?>
            &nbsp;
        </dd>
        <dt><?= __('Solucion') ?></dt>
        <dd>
            <?= h($ticket->solution) ?>
            &nbsp;
        </dd>
        <dt><?= __('ItemCode') ?></dt>
        <dd>
            <?= h($ticket->itemcode->serial) ?>
            &nbsp;
        </dd>
        <dt><?= __('Usuario') ?></dt>
        <dd>
            <?= h($ticket->user_id) ?>
            &nbsp;
        </dd>
        <dt><?= __('Grupo') ?></dt>
        <dd>
            <?= h($ticket->group_id) ?>
            &nbsp;
        </dd>
        <dt><?= __('Impacto') ?></dt>
        <dd>
            <?= h($ticket->ticketimpact->name) ?>
            &nbsp;
        </dd>
        <dt><?= __('Urgencia') ?></dt>
        <dd>
            <?= h($ticket->ticketurgency->name) ?>
            &nbsp;
        </dd>
        <dt><?= __('Prioridad') ?></dt>
        <dd>
            <?= h($ticket->ticketpriority->name) ?>
            &nbsp;
        </dd>
        <dt><?= __('Categoria HD') ?></dt>
        <dd>
            <?= h($ticket->hdcategory->title) ?>
            &nbsp;
        </dd>
        <dt><?= __('Autor') ?></dt>
        <dd>
            <?= h($ticket->user_autor) ?>
            &nbsp;
        </dd>
        <dt><?= __('Requerido por') ?></dt>
        <dd>
            <?= h($ticket->user_requeried) ?>
            &nbsp;
        </dd>
        <dt><?= __('Parent') ?></dt>
        <dd>
            <?= h($ticket->parent_id) ?>
            &nbsp;
        </dd>
        <dt><?= __('Created') ?></dt>
        <dd>
            <?= h($ticket->created) ?>
            &nbsp;
        </dd>
        <dt><?= __('Modified') ?></dt>
        <dd>
            <?= h($ticket->modified) ?>
            &nbsp;
        </dd>
    </dl>
</div>
