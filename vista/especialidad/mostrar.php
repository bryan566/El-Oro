<?php
// Se prendio esta mrd :v
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1) {
	/*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
	header('location: ../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Especialidades</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['../assets/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>

	<div class="wrapper">
		<div class="main-header">
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<div class="user">
						<div class="info">
							<a class="text-white" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo ucfirst($_SESSION['nombre']); ?><br>
									<span class="user-level">Administrador</span>
								</span>
							</a>
						</div>
					</div>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submen?? m??dicos -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#forms" class="text-white">
							<i class="fas fa-user-md"></i> <!-- -->
							<p>M??dicos</p>
							<!--<span class="caret"></span>-->
						</a>
						<div class="collapse" id="forms">
							<ul class="nav nav-collapse">
								<li>
									<a href="../folder/doctor.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submenu ??rea m??dicas -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#tables" class="text-white">
							<i class="fas fa-table"></i>
							<p>Especialidades</p>
							<!--<span class="caret"></span>-->
						</a>
						<div class="collapse" id="tables">
							<ul class="nav nav-collapse">
								<li>
									<a href="../folder/specialty.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<!--<a class="nav-item nav-link" href=""></a>--> <!-- Espaciado -->
					<!-- Submen?? horarios
						<li class="nav-item">
							<a data-toggle="collapse" href="#calendar" class="text-white">
								<i class="fas fa-calendar-alt"></i>
								<p>Horarios</p>								
							</a>
							<div class="collapse" id="calendar">
								<ul class="nav nav-collapse">
									<li>
										<a href="../folder/horario.php">
											<span class="sub-item text-white">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>-->
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submen?? Citas -->
					<li class="nav-item">
						<a data-toggle="collapse" href="#base" class="text-white">
							<i class="fas fa-layer-group"></i>
							<p>Citas</p>
						</a>
						<div class="collapse" id="base">
							<ul class="nav nav-collapse">

								<li>
									<a href="../folder/appointment.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submen?? Pacientes-->
					<li class="nav-item">
						<a data-toggle="collapse" href="#sidebarLayouts" class="text-white">
							<i class="fas fa-male"></i>
							<p>Pacientes</p>
						</a>
						<div class="collapse" id="sidebarLayouts">
							<ul class="nav nav-collapse">
								<li>
									<a href="../folder/customers.php">
										<span class="sub-item text-white">Mostrar</span>
									</a>
								</li>

							</ul>
						</div>
					</li>
					<a class="nav-item nav-link" href=""></a> <!-- Espaciado -->
					<!-- Submen?? Usuarios
						<li class="nav-item">
							<a data-toggle="collapse" href="#user" class="text-white">
								<i class="fas fa-user"></i>
								<p>Reportes</p>									
							</a>
							<div class="collapse" id="user">
								<ul class="nav nav-collapse">
									<li>
										<a href="../folder/usuarios.php">
											<span class="sub-item text-white">Mostrar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>	-->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						<!-- Navbar buscador -->



						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../cerrarSesion.php" type="button" class="btn btn-outline-dark">Cerrar sesi??n</a>
							</a>
						</li>

						<ul class="dropdown-menu dropdown-user animated fadeIn">
							<div class="dropdown-user-scroll scrollbar-outer">
								<li>
									<div class="user-box">
									</div>
								</li>
							</div>
						</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Especialidades</h4>
					</div>
					<div class="row">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Mostrar</h4>
										<?php echo ucfirst($_SESSION['nombre']); ?><br>
										<a href="#addRowModal" class="btn btn-primary btn-round ml-auto" data-toggle="modal">Nuevo</a>
										<?php include('AgregarModal.php'); ?>
									</div>
									<!--<div class="card-tools">
											<a href="../vista/specialty/reporte.php" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export PDF
											</a>
											
										</div>-->
								</div>
								<div class="card-body">


									<div class="table-responsive">
										<table id="add-row" class="table table-bordered table-striped" style="margin-top:20px;">
											<thead>
												<tr>
													<!--<th>#</th>-->
													<th>Especialidad</th>
													<th>Descripci??n</th>
													<th>Fecha Registro</th>
													<th>Fecha Modificaci??n</th>
													<th>Usuario Registro</th>
													<th>Usuario Modificaci??n</th>
													<th>Estado</th>

													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<!--<tfoot>
												<tr>
													<th>#</th>
													<th>Nombre</th>
													<th>Fecha</th>
													<th>Action</th>
												</tr>
											</tfoot>-->


											<tbody>
												<?php
												//incluimos el fichero de conexion
												include_once('../vista/config/dbconect.php');

												$database = new Connection();
												$db = $database->open();
												try {
													$sql = 'SELECT especialidad.codespe,especialidad.nombrees,especialidad.descripcion,especialidad.fecha_reg,especialidad.fecha_mod,especialidad.usu_registro,especialidad.usu_mod,especialidad.estado FROM especialidad';
													foreach ($db->query($sql) as $row) {
												?>
														<tr>
															<!--<td><?php // echo $row['codespe']; 
																	?></td>-->
															<td><?php echo $row['nombrees']; ?></td>
															<td><?php echo $row['descripcion']; ?></td>
															<td><?php echo $row['fecha_reg']; ?></td>
															<td><?php echo $row['fecha_mod']; ?></td>
															<td><?php echo $row['usu_registro']; ?></td>
															<td><?php echo $row['usu_mod']; ?></td>
															<td><?php echo $row['estado']; ?></td>

		

															<td>
																<div class="form-button-action">
																	<button href="#editRowModal=<?php echo $row['codespe']; ?>" class="btn btn-link btn-primary btn-lg" data-toggle="modal" title="" data-original-title="Edit Task" data-target="#editRowModal<?php echo $row['codespe']; ?>">
																		<i class="fa fa-edit"></i>
																	</button>
																	<button href="#deleteRowModal=<?php echo $row['codespe']; ?>" class="btn btn-link btn-danger btn-lg" data-toggle="modal" title="" data-original-title="Delete Task" data-target="#deleteRowModal<?php echo $row['codespe']; ?>">
																		<i class="fa fa-times"></i>
																	</button>
																	<?php include('editar.php'); ?>
																</div>
															</td>


														</tr>
												<?php
													}
												} catch (PDOException $e) {
													echo "Hubo un problema en la conexi??n: " . $e->getMessage();
												}

												//Cerrar la Conexion
												$database->close();

												?>
											</tbody>





										</table>
									</div>


								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo2.js"></script>
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({});

			$('#multi-filter-select').DataTable({
				"pageLength": 5,
				initComplete: function() {
					this.api().columns().every(function() {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
							.appendTo($(column.footer()).empty())
							.on('change', function() {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search(val ? '^' + val + '$' : '', true, false)
									.draw();
							});

						column.data().unique().sort().each(function(d, j) {
							select.append('<option value="' + d + '">' + d + '</option>')
						});
					});
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
				]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
	<script>
		function activo(coddoc) {
			var id = coddoc;
			$.ajax({
				type: "GET",
				url: "../assets/ajax/editar_estado_activo_doctor.php?id=" + id,
			}).done(function(data) {
				window.location.href = '../folder/doctor.php';
			})

		}

		// Editar estado inactivo
		function inactivo(coddoc) {
			var id = coddoc;
			$.ajax({
				type: "GET",
				url: "../assets/ajax/editar_estado_inactivo_doctor.php?id=" + id,
			}).done(function(data) {
				window.location.href = '../folder/doctor.php';
			})
		}
	</script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!--------------------------------script nuevo--------------------------------------------------->

	<?php
	if (isset($_POST["agregar"])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "el oro";

		// Creamos la conexi??n
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Revisamos la conexi??n
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//$dnidoc=$_POST['dnidoc'];
		$nombrees = $_POST['nombrees'];
		$descripcion = $_POST['descripcion'];
		$usu_registro = $_POST['usu_registro'];
		$estado = $_POST['estado'];

		//$estado=$_POST['estado'];

		// Realizamos la consulta para saber si coincide con uno de esos criterios
		//$sql = "select * from doctor where cedula='$cedula' nombre='$nombre' apellido='$apellido' codespe='$codespe' ciudad='$ciudad' direccion='$direccion' or telefo='$telefono'";
		$sql = "select * from doctor where nombrees='$nombrees' or descripcion='$descripcion'";
		$result = mysqli_query($conn, $sql);
	?>


		<?php
		// Validamos si hay resultados
		if (mysqli_num_rows($result) > 0) {
			// Si es mayor a cero imprimimos que ya existe el usuario

			if ($result) {
		?>

				<script type="text/javascript">
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Ya existe el registro a agregar!'

					})
				</script>

				<?php
			}
		} else {
			// Si no hay resultados, ingresamos el registro a la base de datos
			$sql2 = "INSERT INTO especialidad(nombrees, descripcion, usu_registro, usu_mod, estado)VALUES ('$nombrees','$descripcion','$usu_registro','$usu_mod','$estado')";


			if (mysqli_query($conn, $sql2)) {

				if ($sql2) {
				?>

					<script type="text/javascript">
						Swal.fire({
							position: 'top-end',
							icon: 'success',
							title: 'Agregado correctamente',
							showConfirmButton: false,
							timer: 1500
						}).then(function() {
							window.location = "../folder/doctor.php";
						});
					</script>

				<?php
				} else {
				?>
					<script type="text/javascript">
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'No se pudo guardar!'

						})
					</script>
	<?php

				}
			} else {

				echo "Error: " . $sql2 . "" . mysqli_error($conn);
			}
		}
		// Cerramos la conexi??n
		$conn->close();
	}
	?>
</body>

</html>