<?php 
include_once '../database.php';

$db=new database();

$correlativocheq=$_POST['correlativocheq'];
$descripcioncheq=$_POST['descripcioncheq'];
$id_cuenta=$_POST['id_cuenta'];


$query=$db->connect()->prepare('INSERT INTO CHEQUERA values (id_chequera.nextval,:correlativocheq,:descripcioncheq,:id_cuenta)');
$query->bindParam(':correlativocheq',$correlativocheq);
$query->bindParam(':descripcioncheq',$descripcioncheq);
$query->bindParam(':id_cuenta',$id_cuenta);
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