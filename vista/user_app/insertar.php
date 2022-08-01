<?php
session_start();
include_once('../config/dbconect.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fecha"];



if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta = "examenes_pacientes/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

    if ($subirarchivo) {
        $insertar = "INSERT INTO examenes(nombre,apellido,fecha,archivo) VALUES ('$nombre', '$apellido', '$fecha', '$ruta')";
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo "<script>alert('se ha subido el examen');window.location='agregar.php'</script>";
        } else {
            echo "error al subir el archivo";
        }
    }
}

header('location: ../../folder/examen.php');

?>