<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Citas</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">
						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							
							<div class="row">
								<!-- <div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Fecha</label>
										<input name="dates" type="date" class="form-control" value="01-01-2020" min="2022-07-20" max="2030-01-01" required placeholder="Ingrese fecha">
									</div>
								</div>-->
								
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Especialidad</label>
										<select class="form-control" id="continentes" required name="codespe">
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Médico</label>
										<select class="form-control" id="paises" required name="coddoc">
										</select>
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Detalle</label>
										<input name="dates" type="text" class="form-control" required placeholder="Ingrese el detalle">
									</div>


							</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar


					</button>
					<button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>



					</form>
				</div>

			</div>

		</div>

	</div>
</div>
</div>
<!-- -->