<?php require_once("database.php"); ?>
<?php require_once("header.php"); ?>

	
	<div id="main" class="fondodiv ">
		<div class="textofondo">
	<br><h3>Seccion de Usuarios</h3><br>

<div class="row">
	<div class="col-md-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoU">
  		<i class="fas fa-user-plus"></i>  Nuevo 
		</button> <br>
	</div>
	
	<div class="col-md-5">
 		<div class="input-group mb-3">
    		<div class="input-group-prepend">
      		<span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
    		</div>
    <input class="form-control" id="busqueda" type="text" placeholder="Buscar ...">
  </div>
   </div>

</div>


<!-- Modal Usuarios-->
<div class="modal fade" id="nuevoU" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Colaborador</h5>

      </div>
      <div class="modal-body">
			<form action="registrar_colaborador.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						<td>
					<label for="nombre1" id="form">Primer Nombre:</label><br>
					<input type="text" name="nombre1" class="form-control" placeholder="Ingrese Primer Nombre" required>
						</td>
						
						<td>
					<label for="nombre2" id="form">Segundo Nombre:</label><br>
					<input type="text" name="nombre2" class="form-control" placeholder="Ingrese Segundo Nombre" required>
						</td>
						<td>
							<br>
						<label for="Direccion" id="form">Direccion:</label>
						<input type="text" name="calle" class="form-control" placeholder="No.calle">		
						<input type="text" name="avenida" class="form-control" placeholder="Avenida">
						<td>
							<br><br>
						<input type="text" name="no_casa" class="form-control" placeholder="No.casa">
						<input type="text" name="zona" class="form-control" placeholder="Zona">
						</td>
						<td>
							<br><br>
							 <select name="Municipio" id="Municipio" class="custom-select">
							 	<option value="0">Municipio:</option>
							 	
							 	<?php 
							 	$db2=new database();
								$query2=$db2->connect()->prepare("SELECT *FROM MUNICIPIO");
								$query2->execute();

								while ($row2=$query2->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row2['ID_MUNICIPIO']; ?> "> <?php echo $row2['MUNICIPIO']; ?> </option>
								
								<?php } ?>
							 </select>
						<input type="text" name="descripcion" class="form-control" placeholder="Descripcion">	
						</td>
					</tr>
					<tr>
						<td>
					<label for="apellido1" id="form">Primer Apellido:</label><br>
					<input type="text" name="apellido1" class="form-control" placeholder="Ingrese Primer Apellido" required>
						</td>
						<td>
					<label for="apellido2" id="form">Segundo Apellido:</label><br>
					<input type="text" name="apellido2" class="form-control" placeholder="Ingrese Segundo Apellido" required>
						</td>

						<td>
					<label for="telefono" id="form">Telefono:</label><br>
					<input type="text" name="telefono" class="form-control" placeholder="Ingrese No.Telefono" required>
						</td>
					</tr>
					<tr>
						<td>
					<label for="fnacimiento" id="form">Fecha de Nacimiento:</label><br>
					<input type="date" name="fnacimiento" class="form-control" placeholder="Seleccione Fecha de Nacimiento" required>
						</td>
						<td>
					<label for="edad" id="form">Edad:</label><br>
					<input type="text" name="edad" class="form-control" placeholder="Ingrese Edad" required>
						</td>
						<td>
							<label for="departamento" id="form">Area:</label><br>
							 <select name="departamento" id="departamento" class="custom-select">
							 	<option value="0">Seleccione un Area:</option>
							 	
							 	<?php 
							 	$db3=new database();
								$query3=$db3->connect()->prepare("SELECT *FROM DEPARTAMENTO");
								$query3->execute();

								while ($row3=$query3->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row3['ID_DEPARTAMENTO']; ?> "> <?php echo $row3['DEPARTAMENTO']; ?> </option>
								
								<?php } ?>
							 </select>
						</td>
					</tr>
					<tr>
						<td>
						<label for="id_genero" id="form">Genero:</label><br>
							 <select name="id_genero" id="id_genero" class="custom-select">
							 	<option value="0">Seleccione un Genero:</option>
							 	
							 	<?php 
							 	$db4=new database();
								$query4=$db4->connect()->prepare("SELECT *FROM GENERO");
								$query4->execute();

								while ($row4=$query4->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row4['ID_GENERO']; ?> "> <?php echo $row4['GENERO']; ?> </option>
								
								<?php } ?>
							 </select>
						</td>
						<td>
					<label for="dpi" id="form">DPI:</label><br>
					<input type="text" name="dpi" class="form-control" placeholder="Ingrese No.DPI" required>
						</td>
						<td>
					<label for="dpi" id="limitante">Limitante:</label><br>
							 <select name="limitante" id="limitante" class="custom-select">
							 	<option value="0">Seleccione limite:</option>
							 	
							 	<?php 
							 	$db6=new database();
								$query6=$db6->connect()->prepare("SELECT *FROM LIMITANTE");
								$query6->execute();

								while ($row6=$query6->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row6['ID_LIMITANTE']; ?> "> <?php echo $row6['VALMIN']. "--" .$row6['VALMAX']; ?> </option>
								
								<?php } ?>
							 </select>
						</td>
					</tr>
				</table>
				</div>
				<div class="form-group">
					<h5 id="form">Datos de Usuario</h5>
					<hr>
					<table id="tablaform">
						<tr>
						<td>
						<label for="usuario" id="form">Usuario:</label>
						<br>
						<input type="text" name="user" class="form-control" placeholder="Ingrese Correo" required>
							</td>
							<td>
						<label for="contraseña" id="form">Contraseña:</label><br>
						<input type="password" name="psw" class="form-control" placeholder="Ingrese Contraseña" required>
							</td>
						</tr>
						<tr>
							<td>
							 <label for="rol" id="form">Rol:</label><br>
							 <select name="id_rol" id="id_rol" class="custom-select">
							 	<option value="0">Seleccione un Rol:</option>
							 	
							 	<?php 
							 	$db5=new database();
								$query5=$db5->connect()->prepare("SELECT *FROM ROL");
								$query5->execute();

								while ($row5=$query5->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row5['ID_ROL']; ?> "> <?php echo $row5['ROL']; ?> </option>
								
								<?php } ?>
							 </select>
       
							</td>
						</tr>
					</table>
				</div>
				<hr>
				<table id="tablaform">
					<tr>
						<td>
				<button type="button" class="btn btn-danger float-sm-right" data-dismiss="modal"> <i class="fas fa-times-circle"></i> Cancelar </button> 
						</td>
						<td>
				<button type="submit" class="btn btn-success float-sm-right" >
				<i class="fas fa-save"></i> Guardar	</button>
						</td>
					</tr>
				</table>


			</form>        
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


	


<div class="row p-1">
		<div class="col-md-12">
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre 1</th>
						<th>Nombre 2</th>
						<th>Apellido 1</th>
						<th>Apellido 2</th>
						<th>DPI</th>
						<th>Usuario</th>
						<th>Rol</th>
						<th>Estado</th>
						<th>OPCIONES</th>
					</tr>
				</thead>
				<tbody id="tabla_usuarios">
				<?php 
				$db=new database();
				/*$query=$db->connect()->prepare ("SELECT *FROM colaborador");*/
				
				$query=$db->connect()->prepare("SELECT a.id_colaborador, a.nombre1,a.nombre2,a.apellido1,a.apellido2,a.dpi,b.usuario,d.estadou,e.rol from colaborador a, usuario b, asigna_usuario c ,estado_usuario d, rol e where a.id_colaborador=c.id_colaborador and b.id_usuario=c.id_usuario and b.id_estadou=d.id_estadou and b.id_rol=e.id_rol");
				
				$query->execute();

				while ($row=$query->fetch(PDO::FETCH_ASSOC)) 
					{
					?>
						<tr>
							<td> <?php echo $row['ID_COLABORADOR']; ?> </td>
							<td> <?php echo $row['NOMBRE1']; ?>  </td>
							<td> <?php echo $row['NOMBRE2']; ?>  </td>
							<td> <?php echo $row['APELLIDO1']; ?>  </td>
							<td> <?php echo $row['APELLIDO2']; ?>  </td>
							<td> <?php echo $row['DPI']; ?>  </td>
						    <td> <?php echo $row['USUARIO']; ?>  </td>
							<td> <?php echo $row['ESTADOU']; ?>  </td>
							<td> <?php echo $row['ROL']; ?>  </td>
						    <td>
						    	<a href="http://localhost/proyectobd2/admin/funciones/actualizarcolaborador.php?id=<?php echo $row['ID_COLABORADOR'] ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i> </a>
						    	<a href="http://localhost/proyectobd2/admin/funciones/eliminarcolaborador.php?id=<?php echo $row['ID_COLABORADOR'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						    </td>
						</tr>
					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>

<script>
$(document).ready(function(){
  $("#busqueda").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabla_usuarios tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

	<?php include_once("footer.php"); ?>