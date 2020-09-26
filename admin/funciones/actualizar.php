<?php require 'vistas/header.php'; ?>

<div class="fondodiv">

<div class="textofondo">
	
<div class="center"><?php echo $this->mensaje; ?></div>
<h3 class="center">Detalle de Colaborador <?php echo $this->colaborador->id_colaborador; ?> : <?php echo $this->colaborador->usuario; ?> </h3>
			<form action="<?php echo constant('URL'); ?>usuarios/actualizaralumno " method="POST">

				<div class="form-group">
				<br>
				<h5 class="modal-title" id="etiquetanu">Modificar Colaborador</h5>
				

				<table id="tablaform">
					<tr>
						<td>
					<label for="nombre1">Primer Nombre:</label><br>
					<input type="text" name="nombre1" class="form-control" placeholder="Ingrese Primer Nombre" value="<?php echo $this->colaborador->nombre1; ?>" required>
						</td>
						
						<td>
					<label for="nombre2">Segundo Nombre:</label><br>
					<input type="text" name="nombre2" class="form-control" placeholder="Ingrese Segundo Nombre" value="<?php echo $this->colaborador->nombre2; ?>" required>
						</td>
						<td>
							<br>
						<label for="Direccion">Direccion:</label>
						<input type="text" name="calle" class="form-control" placeholder="No.calle" value="<?php echo $this->colaborador->calle; ?>">	

						<input type="text" name="avenida" class="form-control" placeholder="Avenida" value="<?php echo $this->colaborador->avenida; ?>">
						<td>
							<br><br>
						<input type="text" name="no_casa" class="form-control" placeholder="No.casa" value="<?php echo $this->colaborador->no_casa; ?>">
						<input type="text" name="zona" class="form-control" placeholder="Zona" value="<?php echo $this->colaborador->zona; ?>">
						</td>
						<td>
							<br><br>
							 <select name="Municipio" id="Municipio" class="custom-select">
							 	<option value="0">Municipio:</option>
							 	
							 	<?php 
								include_once 'modelos/colaborador.php';
								foreach($this->colaboradores4 as $row4)
								{
									$colaborador4=new colaborador();
									$colaborador4=$row4;
								?>
								<option value="<?php echo $colaborador4->id_municipio; ?>"> <?php echo $colaborador4->municipio; ?> </option>
								
								<?php } ?>
							 </select>
						<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="<?php echo $this->colaborador->descripcion; ?>">	
						</td>
					</tr>
					<tr>
						<td>
					<label for="apellido1">Primer Apellido:</label><br>
					<input type="text" name="apellido1" class="form-control" placeholder="Ingrese Primer Apellido" value="<?php echo $this->colaborador->apellido1; ?>" required>
						</td>
						<td>
					<label for="apellido2">Segundo Apellido:</label><br>
					<input type="text" name="apellido2" class="form-control" placeholder="Ingrese Segundo Apellido" value="<?php echo $this->colaborador->apellido2; ?>" required>
						</td>

						<td>
					<label for="telefono">Telefono:</label><br>
					<input type="text" name="telefono" class="form-control" placeholder="Ingrese No.Telefono" value="<?php echo $this->colaborador->telefono; ?>" required>
						</td>
					</tr>
					<tr>
						<td>
					<label for="fnacimiento">Fecha de Nacimiento:</label><br>
					<input type="date" name="fnacimiento" class="form-control" placeholder="Seleccione Fecha de Nacimiento" value="<?php echo $this->colaborador->fnacimiento; ?>"required>
						</td>
						<td>
					<label for="edad">Edad:</label><br>
					<input type="text" name="edad" class="form-control" placeholder="Ingrese Edad" value="<?php echo $this->colaborador->edad; ?>" required>
						</td>
						<td>
							<label for="departamento">Area:</label><br>
							 <select name="id_departamento" id="id_departamento" class="custom-select">
							 	<option value="0">Seleccione un Area:</option>
							 	
							 	<?php 
								include_once 'modelos/colaborador.php';
								foreach($this->colaboradores5 as $row5)
								{
									$colaborador5=new colaborador();
									$colaborador5=$row5;
								?>
								<option value="<?php echo $colaborador5->id_departamento; ?>"> <?php echo $colaborador5->departamento; ?> </option>
								
								<?php } ?>
							 </select>
						</td>
					</tr>
					<tr>
						<td>
						<label for="id_genero">Genero:</label><br>
							 <select name="id_genero" id="id_genero" class="custom-select">
							 	<option value="0">Seleccione un Genero:</option>
							 	
							 	<?php 
								include_once 'modelos/colaborador.php';
								foreach($this->colaboradores3 as $row3)
								{
									$colaborador3=new colaborador();
									$colaborador3=$row3;
								?>
								<option value="<?php echo $colaborador3->id_genero2; ?>"> <?php echo $colaborador3->genero; ?> </option>

								
								<?php } ?>
							 </select>
						</td>
						<td>
					<label for="dpi">DPI:</label><br>
					<input type="text" name="dpi" class="form-control" placeholder="Ingrese No.DPI" value="<?php echo $this->colaborador->dpi; ?>" required>
						</td>
					</tr>
				</table>
				</div>
				<div class="form-group">
					<h5>Datos de Usuario</h5>
					<hr>
					<table id="tablaform">
						<tr>
							<td>
						<label for="usuario" >Usuario:</label> 
						<input type="text" name="id_usuario"  value="<?php echo $this->colaborador->id_usuario; ?>" >
						<br>
						<input type="email" name="usuario" class="form-control" placeholder="Ingrese Correo" value="<?php echo $this->colaborador->usuario; ?>" required>
							</td>
							<td>
						<label for="contraseña">Contraseña:</label><br>
						<input type="password" name="contraseña" class="form-control" placeholder="Ingrese Contraseña" value="<?php echo $this->colaborador->contraseña; ?>" required>
							</td>
						</tr>
						<tr>
							<td>
							 <label for="rol">Rol:</label><br>
							 <select name="id_rol" id="id_rol" class="custom-select">
							 	<option value="0">Seleccione un Rol:</option>
							 	
							 	<?php 
								include_once 'modelos/colaborador.php';
								foreach($this->colaboradores2 as $row2)
								{
									$colaborador2=new colaborador();
									$colaborador2=$row2;
								?>
								<option value="<?php echo $colaborador2->id_rol; ?>"> <?php echo $colaborador2->roles; ?> </option>
								
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
</div>

<?php require 'vistas/footer.php'; ?>