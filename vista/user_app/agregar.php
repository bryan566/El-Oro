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
					<!-- -->

					<div class="card-body">

						<form action="/vista/user_app/insertar.php" method="POST" autocomplete="off" class="form-register" enctype="multipart/form-data">

							<h1 class="form__title">Registro de Exámenes del Paciente</h1>
							<div class="container--flex">
								<label for="" class="form__label">Nombre</label>
								<input type="text" class="form__input" name="nombre" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">Apellido</label>
								<input type="text" class="form__input" name="apellido" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">Fecha</label>
								<input type="date" class="form__input" name="fecha" required>
							</div>

							<input type="file" name="archivo" class="form__file" required>
							<input type="submit" class="form__submit">









							<!--<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Fecha</label>
										<input name="dates" type="date" class="form-control" value="01-01-2020" min="2022-07-20" max="2030-01-01" required placeholder="Ingrese fecha">
									</div>
								</div>	 -->

							<!--<div class="row">

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
										<input name="datalle" type="text" class="form-control" required placeholder="Ingrese fecha">
									</div>


								</div>

							</div>-->

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