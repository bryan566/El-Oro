
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">

				<center>
					<h4 class="modal-title" id="myModalLabel">Registro de Pacientes</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<div class="card-body">
						<form method="POST" autocomplete="off" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Cédula</label>
										<input name="cedula" type="text" required class="form-control" maxlength="10" placeholder="Ingrese cédula" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>
								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Nombre</label>
										<input name="nombrep" type="text" class="form-control" required placeholder="Ingrese nombre">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Apellidos</label>
										<input name="apellidop" type="text" class="form-control" required placeholder="Ingrese apellidos">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Sexo</label>
										<select class="form-control" name="sexo">
											<option value="Masculino">Masculino</option>
											<option value="Femenino">Femenino</option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Teléfono</label>
										<input name="telefono" type="text" class="form-control" required maxlength="10" placeholder="Ingrese teléfono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Fecha Nacimiento</label>
										<input name="fechanaci" type="date" class="form-control" placeholder="Ingresa tu fecha">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Correo</label>
										<input name="correo" required="" type="text" class="form-control" placeholder="Ingresa tu correo">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Direccion</label>
										<input name="direccion" required="" type="text" class="form-control" placeholder="Ingrese su direccion">
									</div>
								</div>

								<div class="col-md-6 pr-0">
									<div class="form-group form-group-default">
										<label>Ciudad</label>
										<input name="ciudad" required="" type="text" class="form-control" placeholder="Ingrese su ciudad">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Usuario</label>
										<input name="usuario" type="text" class="form-control" required placeholder="Ingrese usuario">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Password</label>
										<input name="clave" type="password" class="form-control" required placeholder="Ingrese contraseña">
									</div>
								</div>

								<input type="file" name="archivo" class="form__file" required>

							</div>

					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
					<button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
					</form>
				</div>

			</div>

		</div>

	</div>
</div>
</div>
<!-- -->





















<!--
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



					
						
						<form action="insertar.php" class="form-register" method="POST" enctype="multipart/form-data">

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
								<label for="" class="form__label">descripcion</label>
								<input type="text" class="form__input" name="descripcion" required>
							</div>
							<div class="container--flex">
								<label for="" class="form__label">Fecha</label>
								<input type="date" class="form__input" name="fecha" required>
							</div>

							<input type="file" name="archivo" class="form__file" required>
							<input type="submit" class="form__submit btn-primary">


						</form>

						
					</div>

				</div>

			</div>

		</div>
	</div>
</div>-->













<!-- -->