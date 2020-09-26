<?php 
include_once '../database.php';

$db=new database();

$nombrecuenta=$_POST['nombrecuenta'];
$id_banco=$_POST['id_banco'];
$monto=$_POST['monto'];
$no_cuenta=$_POST['no_cuenta'];

$query=$db->connect()->prepare('INSERT INTO CUENTA values (id_cuenta.nextval,:nombrecuenta,:id_banco,:monto,:no_cuenta)');
$query->bindParam(':nombrecuenta',$nombrecuenta);
$query->bindParam(':id_banco',$id_banco);
$query->bindParam(':monto',$monto);
$query->bindParam(':no_cuenta',$no_cuenta);
$query->execute();


if($query)
{
	header('location: http://localhost/proyectobd2/admin');
}
else
{
	echo "error";
}


 ?>