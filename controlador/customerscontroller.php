<?php
require_once '../modelo/modelcustomers.php';
class customerscontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $paciente=new Modelo();

        $dato=$paciente->mostrar("paciente", "1");
        require_once '../vista/customers/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/customers/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                //$alm->dnipa=$_POST['txtdnia'];
				$alm->nombrep=$_POST['txtnomb'];
				$alm->apellidop=$_POST['txtapell'];
				$alm->seguro=$_POST['cbosegu'];
				$alm->tele=$_POST['txttele'];
				$alm->sexo=$_POST['cbosex'];
				$alm->usuario=$_POST['txtusu'];
				$alm->password=$_POST['txtpass'];
				$alm->estado=$_POST['cboesta'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: customers.php");

          }

            //ELIMINAR
            function eliminar(){
                $codpaci=$_REQUEST['codpaci'];
                $condicion="codpaci=$codpaci";
                $paciente=new Modelo();
                $dato=$paciente->eliminar("paciente", $condicion);
                header("location:customers.php");
            }

    }
