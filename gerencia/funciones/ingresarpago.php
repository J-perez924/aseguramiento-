<?php 
include_once '../database.php';

$db=new database();

$no_cheque=$_POST['no_cheque'];
$monto=$_POST['monto'];
$desccheque=$_POST['desccheque'];
$fpago=$_POST['fpago'];
$proveedor=$_POST['proveedor'];


$query=$db->connect()->prepare('INSERT INTO PAGO values (pago_id.nextval,:no_cheque,:monto,:desccheque,:fpago,:proveedor)');

$query->bindParam(1,$no_cheque);
$query->bindParam(2,$monto);
$query->bindParam(3,$desccheque);
$query->bindParam(4,$fpago);
$query->bindParam(5,$proveedor);
$query->execute();



if($query)
{
	header('location: http://localhost/proyectobd2/gerencia');
}
else
{
	echo "error";
}

?>