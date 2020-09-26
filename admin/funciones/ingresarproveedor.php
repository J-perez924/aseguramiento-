<?php 
include_once '../database.php';

$db=new database();

$nombreprov=$_POST['nombreprov'];
$descripcionprov=$_POST['descripcionprov'];
$correlativoprov=$_POST['correlativoprov'];

$query=$db->connect()->prepare('INSERT INTO PROVEEDOR values (id_prov.nextval, :nombreprov, :escripcionprov, :correlativoprov)');
$query->bindParam(1,$nombreprov);
$query->bindParam(2,$descripcionprov);
$query->bindParam(3,$correlativoprov);
$query->execute();


if($query)
{
	header('location: http://localhost/proyectobd2/admin/modulos.php');
}
else
{
	echo "error";
}


 ?>