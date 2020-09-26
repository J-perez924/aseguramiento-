<?php
  
  session_start();

  if(isset($_GET['cerrar_sesion']))
  {
    session_unset();
    session_destroy();
  }

  if(isset($_SESSION['rol']))
  {
    switch ($_SESSION['rol']) {
      case 1:
        header('location: http://localhost/proyectobd2/admin');
        break;

      case 2:
        header('location: http://localhost/proyectobd2/gerencia');
        break;

      case 3:
        header('location: http://localhost/proyectobd2/auditoria');
        break;
      case 4:
        header('location: http://localhost/proyectobd2/pagos');
        break;

      default:
    }
  }

$username = isset($_POST['username']) == true ? $_POST['username'] : '';
$password= isset($_POST['password']) == true ? $_POST['password'] : '';

if(empty($username) or empty($password))
{
    
}
else
{
    $connect = oci_connect("proyectobd2", "proyectobd2", "orcl");
    $query = "SELECT * from usuario WHERE usuario='".$username."'";
    $result = oci_parse($connect, $query);

    oci_execute($result);

    $temporal = oci_fetch_array($result);
    if ($temporal==true) 
    {
      if($temporal['ID_ESTADOU']==1)
      {
         if($temporal['CONTRA']==$password)
          {

           $id_user=$temporal['ID_USUARIO'];
           $_SESSION['id_user']=$id_user;

           $user=$temporal['USUARIO'];
           $_SESSION['user']=$user;

           $rol=$temporal['ID_ROL'];
           $_SESSION['rol']=$rol;

           $id_limite=$temporal['ID_LIMITANTE'];
           $_SESSION['id_limite']=$id_limite;
          }
          else
          {
            echo "Error: Contraseña Incorrecta";
          }
      }
      else
      {
            echo"Error: Usuario inactivo o suspendido";
      }
    }
    else
    {
            echo "Error: Usuario no encontrado";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nueva Verapaz</title>

  <!-- bootstrap -->
  <script src="dependencias/jquery/jquery-3.5.1.js"></script>
  <script src="dependencias/jquery/popper.min.js"></script>
  <script src="dependencias/boostrap/js/bootstrap.js"></script>
  
	<link rel="stylesheet" href="dependencias/bootstrap/css/bootstrap.css">
	
	
  <!-- Font-Awesome -->
  <link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/fontawesom/css/all.css">

	<!-- estilos -->
	<link rel="stylesheet" href="dependencias/css/estilos.css">

  <!-- Alertify -->
  <script src="dependencias/alertify/alertify.min.js"></script>
  <link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/alertify/css/alertify.min.css"> 
  <link rel="stylesheet" href="http://localhost/proyectobd2/dependencias/alertify/css/themes/default.min.css">

</head>
<body class="fondologin">
<br><br><br>
<h2 class="text-center"> <i class="fas fa-ticket-alt"></i>	Nueva Verapaz </h2>

  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card card-signin my-5">

          <div class="card-body">
            <h5 class="card-title text-center">Inicio de Sesion </h5>

            <form action="" method="POST" class="form-signin" >

              <div class="form-label-group">
              	<label for="email">Usuario</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="Usuario" required autofocus>
                
              </div>

              <div class="form-label-group">
              	<label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                
              </div>

              <hr class="my-4">
              
			  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><i class="fas fa-sign-in-alt"></i>  Login</button>
      
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  
</body>


</html>
