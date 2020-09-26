<?php require_once("database.php"); ?>
<?php require 'header.php'; ?>

<div class="fondodiv">

		<br>
		<h1 style="color:white;"> Creacion de cuentas, Chequeras y Cheques</h1>

<div class="textofondo2">
<div class="col-md-12">
	

	<table id="tablaform">
		<tr>
			<td>
				<!-- Boton para abrir formulario creacion de bancos-->
				<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#banco">
  				<i class="fas fa-university fa-2x"></i>  Agregar Banco
				</button> <br>
				</div>
			</td>

			<td>
	<!-- Boton para abrir formulario creacion de cuentas-->
				<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cuentas">
  				<i class="fas fa-piggy-bank fa-2x"></i>  Nueva Cuenta 
				</button> <br>
				</div>
			</td>
			<td>
	<!-- Boton para abrir formulario creacion de chequera-->
			<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cheque">
  				<i class="fas fa-money-check fa-2x"></i>  Nuevo Cheque
				</button> <br>
			</div>
			</td>
		</tr>
		<tr>
			<td>
	<!-- Boton para abrir formulario creacion de chequera-->
			<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#chequera">
  				<i class="fas fa-money-check-alt fa-2x"></i>  Nueva Chequera 
				</button> <br>
			</div>
			</td>
			<td>
	<!-- Boton para abrir formulario creacion de proveedores-->
			<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#proveedor">
  				<i class="fas fa-address-book fa-2x"></i>  Nuevo Proveedor
				</button> <br>
			</div>
			</td>

			<td>
	<!-- Boton para abrir formulario creacion de limitantes-->
			<div class="col-md-4">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#limitante">
  				<i class="fas fa-list-ol fa-2x"></i>  Nuevo Limitante
				</button> <br>
			</td>
		</tr>		
	</table>


<div class="modal fade " id="banco" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Banco</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarbanco.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="nombrebanco" id="form">Nombre Banco</label><br>
					<input type="text" name="nombrebanco" class="form-control" placeholder="Ingrese Primer Nombre" required>
					</tr>

						
					<tr>
					<label for="descripcionbanco" id="form">Descripcion:</label><br>
					<textarea name="descripcionbanco" id="" cols="20" rows="4" class="form-control"> </textarea>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

<div class="modal fade " id="cuentas" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Cuenta</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarcuenta.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="nombrecueta" id="form">Nombre de cuenta</label><br>
					<input type="text" name="nombrecuenta" class="form-control" placeholder="Ingrese Nombre de cuenta" required>
					</tr>

						
					<tr>
					<label for="id_banco" id="form">Banco:</label><br>
						<select name="id_banco" id="id_banco" class="custom-select">
						 	<option value="0">Banco:</option>
							 	
						 	<?php 
						 	$db=new database();
							$query=$db->connect()->prepare("SELECT *FROM BANCO");
							$query->execute();
								while ($row=$query->fetch(PDO::FETCH_ASSOC)) 
							{
							?>
							<option value="<?php echo $row['ID_BANCO']; ?> "> <?php echo $row['ID_BANCO']."-".$row['NOMBRE']; ?> </option>
							
							<?php } ?>
						 </select>
					</tr>
					<tr>
					<label for="monto" id="form">Monto Inicial</label><br>
					<input type="text" name="monto" class="form-control" placeholder="Ingrese monto base" required>
					</tr>
					<tr>
					<label for="no_cuenta" id="form">No. Cuenta</label><br>
					<input type="text" name="no_cuenta" class="form-control" placeholder="Ingrese No.cuenta" required>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

<div class="modal fade " id="chequera" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Chequera</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarchequera.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="correlativocheq" id="form">Correlativo</label><br>
					<input type="text" name="correlativocheq" class="form-control" placeholder="Correlativo chequera" required>
					</tr>

					<tr>
					<label for="nombre2" id="form">Descripcion:</label><br>
					<textarea name="descripcioncheq" id="" cols="20" rows="4" class="form-control"> </textarea>
					</tr>
					<tr>
					  <label for="id_cuenta" id="form">No.Cuenta</label><br>
						<select name="id_cuenta" id="id_cuenta" class="custom-select">
						 	<option value="0">No.Cuenta:</option>
							 	
						 	<?php 
						 	$db2=new database();
							$query2=$db2->connect()->prepare("SELECT *FROM CUENTA");
							$query2->execute();
								while ($row2=$query2->fetch(PDO::FETCH_ASSOC)) 
							{
							?>
							<option value="<?php echo $row2['ID_CUENTA']; ?> "> <?php echo $row2['ID_CUENTA']."-".$row2['NOMBRE']; ?> </option>
							
							<?php } ?>
						 </select>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

<div class="modal fade " id="cheque" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Nuevo Cheque</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarcheque.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="correlativoch" id="form">Correlativo</label><br>
					<input type="text" name="correlativoch" class="form-control" placeholder="Ingrese Correlativo Cheque" required>
					</tr>

						
					<tr>
					<label for="id_chequera" id="form">ID Chequera:</label><br>
						<select name="id_chequera" id="id_cuenta" class="custom-select">
						 	<option value="0">No.Chequera:</option>
							 	
						 	<?php 
						 	$db3=new database();
							$query3=$db3->connect()->prepare("SELECT *FROM CHEQUERA");
							$query3->execute();
								while ($row3=$query3->fetch(PDO::FETCH_ASSOC)) 
							{
							?>
							<option value="<?php echo $row3['ID_CHEQUERA']; ?> "> <?php echo $row3['ID_CHEQUERA']."-".$row3['CORRELATIVO']; ?> </option>
							
							<?php } ?>
						 </select>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

<div class="modal fade " id="proveedor" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar proveedor</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarproveedor.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="nombreprov" id="form">Nombre Proveedor</label><br>
					<input type="text" name="nombreprov" class="form-control" placeholder="Nombre Proveedor" required>
					</tr>

					<tr>
					<label for="descripcionbanco" id="form">Descripcion:</label><br>
					<textarea name="descripcionprov" id="" cols="20" rows="4" class="form-control"> </textarea>
					</tr>
					<tr>
					<label for="correlativoprov" id="form">Correlativo</label><br>
					<input type="text" name="correlativoprov" class="form-control" placeholder="Correlativo" required>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

<div class="modal fade " id="limitante" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Ingresar Limitante</h5>
      </div>
      <div class="modal-body">
			<form action="funciones/ingresarlimitante.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
						
					<label for="nombreprov" id="form">Monto Minimo</label><br>
					<input type="text" name="valmin" class="form-control" placeholder="Ingrese monto minimo" required>
					</tr>

					<tr>
					<label for="descripcionbanco" id="form">Monto Maximo:</label><br>
					<input name="valmax" id="valmax" class="form-control" placeholder="Ingrese monto maximo"> </input>
					</tr>
					<tr>
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
      	<div class="modal-footer">  </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

<?php require 'footer.php'; ?>