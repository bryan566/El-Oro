<?php
class Modelo{

  private $paciente;
  private $db;

  public function __construct(){
      $this->paciente=array();
      $this->db=new PDO('mysql:host=localhost;dbname=el oro',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM paciente";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->paciente[]=$tabla;
      }
      return $this->paciente;
    }
    public function  insertar(Modelo $data){
    try {
      //$query="INSERT INTO customers (dnipa,nombrep,apellidop,seguro,tele,sexo,usuario,password,estado)VALUES(?,?,?,?,?,?,?,?,?)";
      $query="INSERT INTO paciente (cedula,nombrep,apellidop,sexo,telefono, fechanaci,correo,direccion,ciudad,usuario,usuario,password,cargo,estado)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      
      $this->db->prepare($query)->execute(array($data->nombrees));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
