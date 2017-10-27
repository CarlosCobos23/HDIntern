<div id="login">
	<?= $this->Flash->render() ?>
	<h1>PORTAL TI</h1>
	<!--<div class="logo"></div>-->
	<?= $this->Form->create() ?>
	<?= $this->Form->control('name') ?>
	<?= $this->Form->control('password') ?>
	<?= $this->Form->button('ENTER') ?>
	<?= $this->Form->end() ?>
	<div id="footer">Desarrollado por TI Operaciones © 2017 TONY Tiendas. <br />Todos los derechos reservado</div>
</div>