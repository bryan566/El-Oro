<!-- Agregar Nuevos Registros -->
<link rel="stylesheet" href="/assets/css/examenes/estilos.css">



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

						<!--<form action="/vista/user_app/insertar.php" method="POST" autocomplete="off" class="form-register" enctype="multipart/form-data">-->

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

						<!--</form>-->
					</div>

				</div>

			</div>

		</div>
	</div>
</div>
<!-- -->