<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "el oro");

//include_once('../config/dbconect.php');
//include_once('../vista/config/dbconect.php');

//$database = new Connection();
//$db = $database->open();
<?php  echo ucfirst($_SESSION['nombre']); ?><br>
$nombrem = $_POST["nombrem"];
$apellido = $_POST["apellido"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];
echo $codpaci=$_SESSION['id']; 
//echo "$codpaci". $_SESSION["codpaci"];  
echo "$nombre". $_SESSION["nombre"];  

if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta = "archivo/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

    if ($subirarchivo) {
        $insertar = "INSERT INTO examen (nombre,apellido,descripcion,codpaci,nombrep,fecha,archivo) VALUES ('$nombrem', '$apellido', '$descripcion','$codpaci', '$nombre', '$fecha', '$ruta')";
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo "<script>window.location='mostrararchivo.php'</script>";            
           
        } else {
            echo "error al subir el archivo";
        }
    }
}

//header('location: ../../folder/examen.php');

?>