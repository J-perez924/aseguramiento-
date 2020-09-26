<?php 
include_once 'database.php';

$db=new database();

			$rs = $db->connect()->query("SELECT MAX(ID_COLABORADOR) AS id FROM COLABORADOR");
			if ($rowid = $rs->fetch()) 
			{
				$id_colab = trim($rowid[0]);
			}
			echo $id_colab;
?>