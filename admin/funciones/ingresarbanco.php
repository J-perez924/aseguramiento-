<?php 
include_once '../database.php';

$db=new database();

$nombreb=$_POST['nombrebanco'];
$descripcionb=$_POST['descripcionbanco'];

$query=$db->connect()->prepare('INSERT INTO BANCO values (banco_id.nextval,:nombreb,:descripcionb)');
$query->bindParam(1,$nombreb);
$query->bindParam(2,$descripcionb);
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