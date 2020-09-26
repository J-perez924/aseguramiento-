<?php 
include_once '../database.php';

$db=new database();

$correlativoch=$_POST['correlativoch'];
$id_chequera=$_POST['id_chequera'];



$query=$db->connect()->prepare('INSERT INTO CHEQUE values (id_cheque.nextval,:correlativoch,:id_chequera)');
$query->bindParam(':correlativoch',$correlativoch);
$query->bindParam(':id_chequera',$id_chequera);
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