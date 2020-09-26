<?php require_once("database.php"); ?>
<?php require_once("header.php"); ?>

	
	<div id="main" class="fondodiv ">
		<div class="textofondo">
	<br><h3>Liberacion de Cheques - Departamento de Pagos -</h3><br>

<div class="row">
	<div class="col-md-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cheque">
  		<i class="fas fa-search-dollar"></i>  Nuevo Pago 
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
<div class="modal fade " id="cheque" tabindex="-1" role="dialog" aria-labelledby="etiquetanu" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="form">Nuevo Cheque</h5>

      </div>
      <div class="modal-body">
			<form action="funciones/ingresarpago.php" method="POST">
				<div class="form-group">
				<table id="tablaform">
					<tr>
					<label for="id_pago" id="form">No. Pago:</label><br>
					<input type="text" name="id_pago" class="form-control" placeholder="No.Cheque" required>
					<label for="no_cheque" id="form">No. Cheque:</label><br>
					<input type="text" name="no_cheque" class="form-control" placeholder="No.Cheque" required>
					</tr>
						
					<tr>
					<label for="monto" id="form">Monto:</label><br>
					<input type="text" name="monto" class="form-control" placeholder="Monto" required>
					</tr>
					<tr>
						<label for="desccheque" id="form">Descripcion:</label>
						<textarea name="desccheque" id="desccheque" cols="30" rows="3" class="form-control"></textarea>
					</tr>
					<tr>
						<select name="proveedor" id="proveedor" class="custom-select">
						 	<option value="0">Proveedor:</option>
							 	
						 	<?php 
						 	$db2=new database();
							$query2=$db2->connect()->prepare("SELECT *FROM PROVEEDOR");
							$query2->execute();
								while ($row2=$query2->fetch(PDO::FETCH_ASSOC)) 
								{
								?>
								<option value="<?php echo $row2['ID_PROVEEDOR']; ?> "> <?php echo $row2['CORELATIVO']."--".$row2['DESCRIPCION']; ?> 
								</option>
								
							<?php } ?>
						 </select>
					</tr>
					<tr>
						<label for="form"> Fecha</label>
						<input type="date" name="fpago" class="form-control">
					</tr>
				</table>
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
				</div>
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
						<th>ID Transaccion</th>
						<th>No. Cheque</th>
						<th>Descripcion</th>
						<th>Monto</th>
						<th>Beneficiario</th>
						<th>Fecha y Hora</th>
						<th>Estado</th>
						<th>OPCIONES</th>
					</tr>
				</thead>
				<tbody id="tabla_usuarios">
				<?php 
				$db=new database();
				/*$query=$db->connect()->prepare ("SELECT *FROM colaborador");*/
				
				$query=$db->connect()->prepare("SELECT a.id_pago, a.id_cheque, a.monto,      a.descripcion, a.fcreacion, a.id_proveedor from pago a, limitante b where b.id_limitante=:limite and a.monto>=b.valmin and a.monto<=b.valmax");
				$query->bindParam(1,$id_limite);
				
				$query->execute();

				while ($row=$query->fetch(PDO::FETCH_ASSOC)) 
					{
					?>
						<tr>
							<td> <?php echo $row['ID_PAGO']; ?> </td>
							<td> <?php echo $row['ID_CHEQUE']; ?>  </td>
							<td> <?php echo $row['DESCRIPCION']; ?>  </td>
						    <td> <?php echo $row['MONTO']; ?>  </td>
							<td> <?php echo $row['ID_PROVEEDOR']; ?>  </td>
							<td> <?php echo $row['FCREACION']; ?>  </td>
						    <td>
						    	<a href="<?php echo constant('URL').'usuarios/vercolaborador/'.$colaborador->id_colaborador; ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i> </a>
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
