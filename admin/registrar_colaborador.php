<?php 

include_once 'database.php';

		$nombre1=$_POST['nombre1'];
		$nombre2=$_POST['nombre2'];
		$apellido1=$_POST['apellido1'];
		$apellido2=$_POST['apellido2'];
		$fnacimiento=$_POST['fnacimiento'];
		$edad=$_POST['edad'];
		$id_genero=$_POST['id_genero'];
		$dpi=$_POST['dpi'];

		$usuario=$_POST['user'];
		$psw=$_POST['psw'];
		$id_rol=$_POST['id_rol'];
		$estadou=1;
		$limitante=$_POST['limitante'];

		$calle=$_POST['calle'];
		$avenida=$_POST['avenida'];
		$no_casa=$_POST['no_casa'];
		$zona=$_POST['zona'];
		$Municipio=$_POST['Municipio'];
		$descripcion=$_POST['descripcion'];

		$telefono=$_POST['telefono'];

		$id_departamento=$_POST['departamento'];

		$db1=new database();

		$queryco = $db1->connect()->prepare('INSERT INTO COLABORADOR  values (colaborador_id.nextval,:nombre1, :nombre2,:apellido1, :apellido2, :fnacimiento,:edad,:id_genero,:dpi)');
		
		$queryco->bindParam(1,$nombre1);
		$queryco->bindParam(2,$nombre2);
		$queryco->bindParam(3,$apellido1);
		$queryco->bindParam(4,$apellido2);
		$queryco->bindParam(5,$fnacimiento);
		$queryco->bindParam(6,$edad);
		$queryco->bindParam(7,$id_genero);
		$queryco->bindParam(8,$dpi);
		$queryco->execute();	


		$db2=new database();
		$queryuser = $db2->connect()->prepare('INSERT INTO USUARIO  values (id_user.nextval,:usuario, :psw, :id_rol, :estadou,:limitante)');

		$queryuser->bindParam(1,$usuario);
		$queryuser->bindParam(2,$psw);
		$queryuser->bindParam(3,$id_rol);
		$queryuser->bindParam(4,$estadou);
		$queryuser->bindParam(5,$limitante);
		$queryuser->execute();


		$db3=new database();
			$rs = $db3->connect()->query("SELECT MAX(ID_COLABORADOR) AS id FROM COLABORADOR");
			if ($rowid = $rs->fetch()) 
			{
				$id_colab = trim($rowid[0]);
			}

			$rs2 = $db3->connect()->query("SELECT MAX(ID_USUARIO) AS id FROM USUARIO");
			if ($rowuser = $rs2->fetch()) 
			{
				$id_user = trim($rowuser[0]);
			}


		$db5=new database();
		$queryauc = $db5->connect()->prepare('INSERT INTO ASIGNA_USUARIO values (asid.nextval,:id_usuario,:id_colaborador)');

		$queryauc->bindParam(1,$id_user);
		$queryauc->bindParam(2,$id_colab);
		$queryauc->execute();

		$db6=new database();

		$querydir = $db6->connect()->prepare('INSERT INTO DIR_COLAB values (id_dir.nextval,:calle,:avenida,:no_casa,:zona,:Municipio,:descripcion,:id_colaborador)');
		
		$querydir->bindParam(1,$calle);
		$querydir->bindParam(2,$avenida);
		$querydir->bindParam(3,$no_casa);
		$querydir->bindParam(4,$zona);
		$querydir->bindParam(5,$Municipio);
		$querydir->bindParam(6,$descripcion);
		$querydir->bindParam(7,$id_colab);
		$querydir->execute();


		$db7=new database();
		$querytel= $db7->connect()->prepare('INSERT INTO TEL_COLABORADOR values (id_tel.nextval,:telefono,:id_colaborador)');
		$querytel->bindParam(1,$telefono);
		$querytel->bindParam(2,$id_colab);
		$querytel->execute();



		$db8=new database();
		$querydepart= $db8->connect()->prepare('INSERT INTO USUARIO_DEPART values (userdepart.nextval,:id_colaborador,:id_departamento)');

		$querydepart->bindParam(1,$id_colab);
		$querydepart->bindParam(2,$id_departamento);
		$querydepart->execute();
		
		if ($queryco and $queryuser and $queryauc and $querydir and $querytel and $querydepart )
		{
			header('location: http://localhost/proyectobd2/admin');
		/*echo $nombre1."<br>";
		echo $nombre2."<br>";
		echo $apellido1."<br>";
		echo $apellido2."<br>";
		echo $fnacimiento."<br>";
		echo $edad."<br>";
		echo $id_genero."<br>";
		echo $dpi."<br>";

		echo $usuario."<br>";
		echo $psw."<br>";
		echo $id_rol."<br>";
		echo $estadou."<br>";
		echo $limitante."<br>";

		echo $calle."<br>";
		echo $avenida."<br>";
		echo $no_casa."<br>";
		echo $zona."<br>";
		echo $Municipio."<br>";
		echo $descripcion."<br>";

		echo $telefono."<br>";

		echo $id_departamento."<br>";
		*/
		}
		else 
		{
			echo "error";
		}


?>