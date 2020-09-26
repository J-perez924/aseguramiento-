<?php 
include_once '../database.php';

$db=new database();

$valmin=$_POST['valmin'];
$valmax=$_POST['valmax'];


$query=$db->connect()->prepare('INSERT INTO LIMITANTE values (id_limitante.nextval, :valmin, :valmax)');
$query->bindParam(1,$valmin);
$query->bindParam(2,$valmax);
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