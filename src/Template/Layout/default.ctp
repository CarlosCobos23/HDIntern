<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'TONI TI: HelpDesk & Asset Management';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
	<?= $this->Html->css('font-awesome.css') ?>
	<?= $this->Html->css('themes/default/easyui.css') ?>
	<?= $this->Html->css('themes/icon.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

	<?= $this->Html->script('jquery.min.js'); ?>
	<?= $this->Html->script('jquery.easyui.min.js'); ?>

</head>
<body>
	<div id="header">
	  <div id="mainmenu" class="left"><i class="fa fa-bars" aria-hidden="true"></i></div>
	  <div id="logo" class="left">PORTAL TI</div>
	  <div class="right">
			<ul class="headernav">
				<li><a href="" class="blink bgalert"><i class="fa fa-bell-o" aria-hidden="true"></i> (13)</a></li>
				<li><a href=""><i class="fa fa-graduation-cap" aria-hidden="true"></i> Conocimiento</a></li>
				<li><a href=""><i class="fa fa-user-circle" aria-hidden="true"></i> Julio Perea Pastrana</a></li>
        <li><a href=""><i class="fa fa-window-close icon-cls" aria-hidden="true"></i><?= $this->Html->link(__('Cerrar'), ['controller'=> 'users', 'action' => 'logout'], ['class' => 'cerrar']) ?></a></li>
    <!-- boton imprimir-->
        <style type='text/css' media='print'>
         .noimp, #header , #headernav , #footer, #actions-sidebar ,#right ,#topnav,#left,.breadcrumbs,#searchbox,.actions , .paginator{display:none}

         </style>
     <li>
         <input type='button' value='Imprimir' onClick='window.print()'; class='noimp'/>

   </li>
      </ul>
	  </div>
	</div>

	<?= $this->element('appnav') ?>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <div class="footer">
		Desarrollado por TI Operaciones © Copyright 2017 - TONY Tiendas. Todos los derechos reservados
	</div>




</body>
</html>
