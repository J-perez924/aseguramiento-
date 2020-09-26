<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<!-- estilos-->	
	<link rel="stylesheet" href="<?php echo constant('URL');?>public/css/estilos.css">
	
	<!-- bootstrap CSS-->
	<link rel="stylesheet" href="<?php echo constant('URL');?>public/bootstrap/css/bootstrap.css"> 
    <!-- bootstrap JS -->
    <script src=" <?php echo constant('URL');?>public/jquery/jquery-3.5.1.js"></script>
    <script src="<?php echo constant('URL');?>public/jquery/popper.min.js"></script>
    <script src="<?php echo constant('URL');?>public/bootstrap/js/bootstrap.js"></script>
	
	<!-- Alertify -->
	<script src="<?php echo constant('URL');?>public/alertify/alertify.min.js"></script>
	<link rel="stylesheet" href="<?php echo constant('URL');?>public/alertify/css/alertify.min.css"> 
	<link rel="stylesheet" href="<?php echo constant('URL');?>public/alertify/css/themes/default.min.css">
	
	<!-- Font-Awesome -->
	<link rel="stylesheet" href="<?php echo constant('URL');?>public/fontawesom/css/all.css">


</head>
<body>


	
<nav id="lateral" class="navbar-dark bg-dark align-content-center">
	
		<a href="#" class="navbar-brand"> <i class="fas fa-ticket-alt"></i> EKS</a>
		<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" href=" <?php echo constant('URL');?>main"> <i class="fas fa-home"></i> Inicio</a></li>
		<li class="nav-item"><a class="nav-link" href=" <?php echo constant('URL');?>usuarios"><i class="fas fa-users"></i> Usuarios</a></li>


		  <!-- Boton submenu tickets -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ticketcollapse">
    		<span class="fas fa-ticket-alt"></span> Cuentas
  		</button>
 		  <!-- Sub-menu tickets-->
  		<div class="collapse navbar-collapse" id="ticketcollapse">
    		<ul class="navbar-nav">
      			<li class="nav-item"> 
      				<a class="nav-link" href="<?php echo constant('URL');?>tickets"> 
      					<i class="fas fa-plus-circle"></i> Bancos
      				</a> 
      			</li>

      			<li class="nav-item"> 
      				<a class="nav-link" href="<?php echo constant('URL');?>asignacion">
      					<i class="fas fa-plus-circle"></i> Cuentas
      				</a> 
      			</li>
      			<li class="nav-item"> <a class="nav-link" href="<?php echo constant('URL');?>seguimiento"><i class="fas fa-chart-area"></i> Chequeras y Cheques</a> </li>
    		</ul>
  		</div>
  	</i>

		  <!-- Boton submenu Reportes-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#reportecollapse">
    		<span class="fas fa-search"></span> Reportes
  		</button>
 		  <!-- Sub-menu Reportes-->
  		<div class="collapse navbar-collapse" id="reportecollapse">
    		<ul class="navbar-nav">
      			<li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-plus-circle"></i> Usuarios</a> </li>
      			<li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-check-circle"></i> Tickets</a> </li>
      			<li class="nav-item"> <a class="nav-link" href="#"><i class="fas fa-chart-area"></i> Seguimiento</a> </li>
    		</ul>
  		</div>
  		  				<li class="nav-item"><a class="nav-link" href=" http://localhost/pruebais/index.php?cerrar_sesion=1"> <i class="fas fa-home"></i> Cerrar Sesion</a></li>

	</ul>
	
</nav>

<main>
	<div id="contenido">
		


