<div id="topnav" class="clear">

  <div id="appName" class="left">
    <!-- redirecciona a tickets-->
        <a><?= $this->HTML->link('HelpDesk',['controller'=>'Tickets','action'=>'index']);?></a>
  </div>

  <div class="left">
  <ul class="topnavMenuL">
  <?php foreach ($tickettyperows as $row): ?>
    <li>
      <?= $this->Html->link(($row->name), ['controller' => 'Tickets', 'action' => 'index', $row->id]); ?>
    </li>
  <?php endforeach; ?>
  </ul>
  </div>

  <div class="right">
  	<ul class="topnavMenuR">
        
        <li><a href="" title="Dashboard">Equipo</a></li>
        <li><a href="" title="Reportes">Indicadores</a></li>
        <li><a href=""  title="Ajustes">Ajustes</a></li>
    </ul>
  </div>

  <div class="searchbox right">
    <?= $this->Form->create('ticketsearch', ['type' => 'get','url' => ['controller' => 'Tickets', 'action' => 'view']]) ?>
        <?php
            echo $this->Form->control('searchticket',['label' => false]);
        ?>
    <?= $this->Form->end() ?>
     
    
  </div>
</div>


<div class="breadcrumbs">
HelpDesk <span class="sep">/</span> Items <span class="sep">/</span> Editar #123
</div>
