<?php 
require_once("../database.php");
$db=new database();
$id=$_GET['id'];


		$query=$db->connect()->prepare("DELETE from asigna_usuario where id_colaborador=:id");
		$query2=$db->connect()->prepare("DELETE from dir_colab where id_colaborador=:id;");
		$query3=$db->connect()->prepare("DELETE from tel_colaborador where id_colaborador=:id;");
		$query4=$db->connect()->prepare("DELETE from usuario_depart where id_colaborador=:id;");
		$query5=$db->connect()->prepare("DELETE from colaborador where id_colaborador=:id;");
		$query6=$db->connect()->prepare("DELETE from usuario where id_usuario=:id_usuario;");
		try 
		{
			$query->execute(['id'=>$id]);
			$query2->execute(['id'=>$id]);
			$query3->execute(['id'=>$id]);
			$query4->execute(['id'=>$id]);
			$query5->execute(['id'=>$id]);
			
			header('location: http://localhost/proyectobd2/admin');
		} 
		catch (PDOException $e) 
		{
			header('location: http://localhost/proyectobd2/admin');
		}

?>
