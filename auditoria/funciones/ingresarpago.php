<?php 


$connect = oci_connect("proyectobd2", "proyectobd2", "orcl");

$st= oci_parse($connect, "INSERT INTO PAGO VALUES (:id_pago,:no_cheque,:monto,:desccheque,:fpago,:proveedor)");


$id_pago=$_POST['id_pago'];
$no_cheque=$_POST['no_cheque'];
$monto=$_POST['monto'];
$desccheque=$_POST['desccheque'];
$fpago=$_POST['fpago'];
$proveedor=$_POST['proveedor'];


//vinculamos las variables a la sentencia sql
oci_bind_by_name($st, ':id_pago', $id_pago);
oci_bind_by_name($st, ':no_cheque', $no_cheque);
oci_bind_by_name($st, ':monto', $monto);
oci_bind_by_name($st, ':desccheque', $desccheque);
oci_bind_by_name($st, ':fpago', $fpago);
oci_bind_by_name($st, ':proveedor', $proveedor);

//ejecutamos el statement
oci_execute($st);

if($st)
{
	header('location: http://localhost/proyectobd2/auditoria');
}
else
{
	echo "error";
}

?>