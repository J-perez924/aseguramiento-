<?php 
session_start();

if(!isset($_SESSION['rol']))
	{
	header('location: http://localhost/proyectobd2/');
	}
else
	{
		if($_SESSION['rol']!=4)
		{
		header('location:http://localhost/proyectobd2/');
		}
	}

           $id_user=$_SESSION['id_user'];

           $user=$_SESSION['user'];

           $rol=$_SESSION['rol'];

           $id_limite=$_SESSION['id_limite'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<!-- estilos-->	
	<link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/css/estilos.css">
	
	<!-- bootstrap CSS-->
	<link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/bootstrap/css/bootstrap.css"> 
    <!-- bootstrap JS -->
    <script src="http://localhost/proyectobd2/dependencias/jquery/jquery-3.5.1.js"></script>
    <script src="http://localhost/proyectobd2/dependencias/jquery/jquery.js"></script>
    <script src="http://localhost/proyectobd2/dependencias/bootstrap/js/bootstrap.js"></script>
	
	<!-- Alertify -->
	<script src="../dependencias/alertify/alertify.min.js"></script>
	<link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/alertify/css/alertify.min.css"> 
	<link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/alertify/css/themes/default.min.css">
	
	<!-- Font-Awesome -->
	<link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/fontawesom/css/all.css">


</head>
<body>


	
<nav id="lateral" class="navbar-dark bg-dark">
	
		<a class="navbar-brand"> <i class="fas fa-money-check"></i> Nueva Verapaz</a>
		<i class="far fa-user-circle fa-6x" id="datosu"></i>
		<h4 style="color: white;" id="datosu"> <?php echo $user; ?></h4>

		<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" href="http://localhost/proyectobd2/pagos/index.php"> <i class="fas fa-home"></i> Inicio</a></li>
		<li class="nav-item"><a class="nav-link" href="http://localhost/proyectobd2/pagos/pagos.php"><i class="fas fa-users"></i> Cheques</a></li>

  		 <li class="nav-item"><a class="nav-link" href=" http://localhost/proyectobd2/index.php?cerrar_sesion=1"> <i class="fas fa-home"></i> Cerrar Sesion</a></li>
	</ul>
	
</nav>

<main>
	<div id="contenido">
		


