<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];

			//$dnidoc = $_POST['dnidoc'];
			$cedula = $_POST['cedula'];
			//$nomdoc = $_POST['nomdoc'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			
			$sexo = $_POST['sexo'];
			$telefono = $_POST['telefono'];
			$fechanaci = $_POST['fechanaci'];
			$correo = $_POST['correo'];
			$direccion = $_POST['direccion'];
			$ciudad = $_POST['ciudad'];
		
			
//$sql = "UPDATE doctor SET dnidoc = '$dnidoc', nomdoc = '$nomdoc', apedoc = '$apedoc', sexo = '$sexo', telefo = '$telefo',fechanaci = '$fechanaci', correo = '$correo', naciona = '$naciona' WHERE coddoc = '$id'";
$sql = "UPDATE doctor SET cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', sexo = '$sexo', telefono = '$telefono',fechanaci = '$fechanaci', correo = '$correo', direccion = '$direccion', ciudad = '$ciudad' WHERE coddoc = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Doctor actualizado correctamente' : 'No se puso actualizar el doctor';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/doctor.php');

?>