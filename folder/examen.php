
<?php
require_once '../controlador/examencontroller.php';
$objapp=new appointmentcontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objapp->mostrar();
    elseif ($op=="nuevo")
        $objapp->nuevo();
    elseif ($op=="guardar")
        $objapp->guardar();
    elseif ($op=="editar")
        $objapp->editar();
    elseif($op=="update")
        $objapp->update();
        elseif($op=="insertar")
            $objapp->insertar();
        elseif($op=="recibir")
            $objapp->recibir();
            elseif($op=="eliminar")
                $objapp->eliminar();
?>
