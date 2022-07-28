<?php

session_start();

// isset verifica si existe una variable o eso creo xd
if (isset($_SESSION['id'])) {
  header('location: controller/redirec.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Registrate</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css " href="assets/css/style.css">
  <link rel="stylesheet" type="text/css " href="assets/css/css/all.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
</head>

<body>

<div class="card">
    <div align="center" class="card-header">
      REGISTRAR PACIENTES
    </div>
    <div class="card-body">
      <form class="row g-3 needs-validation" novalidate method="post" action="pacientes_adm.php">

        <div class="mb-3" align="center">
          <label for="cedula" class="form-label">Cédula</label>
          <input type="text" name="cedula" value="<?php if (isset($_POST['cedula'])) echo $_POST['cedula'] ?>" autocomplete="off" placeholder="" required>
        </div>

        <div class="mb-3" align="center">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="usuario" value="<?php if (isset($_POST['apellido'])) echo $_POST['apellido'] ?>" autocomplete="off" placeholder="" required>
        </div>

        <div class="mb-3" align="center">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" class="form-control" name="nombre" id="nombre" onKeyUp="this.value = this.value.replace (/[^aA-zZ\s\\]/, '');" size="30" style="width:300px" aria-describedby="helpId" placeholder="Nombre del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="mb-3" align="center">
          <label for="correo" class="form-label">Correo:</label>
          <input type="email" class="form-control" name="correo" id="correo" onkeyup=" javascript:validar_email('correo')" size="30" maxlength="30" style="width:300px" aria-describedby="emailHelpId" placeholder="Correo del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="mb-3" align="center">
          <label for="telefono" class="form-label">Teléfono:</label>
          <input type="text" class="form-control" name="telefono" id="telefono" onkeypress='return validar2(event)' size="10" maxlength="10" style="width:300px" aria-describedby="helpId" placeholder="Teléfono del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="mb-3" align="center">
          <label for="direccion" class="form-label">Dirección:</label>
          <input type="text" class="form-control" name="direccion" id="direccion" size="40" style="width:300px" aria-describedby="helpId" placeholder="Dirección del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="mb-3" align="center">
          <label for="ciudad" class="form-label">Ciudad de recidencia:</label>
          <input type="text" class="form-control" name="ciudad" id="ciudad" size="40" style="width:300px" aria-describedby="helpId" placeholder="Ciudad de recidencia del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="mb-3" align="center">
          <label for="fecha" class="form-label">Fecha de nacimiento:</label>
          <input type="date" class="form-control" name="fecha" id="fecha" value="01-01-2020" min="1995-01-01" max="2020-01-01" style="width:300px" aria-describedby="helpId" placeholder="Fecha de nacimiento del paciente" Required>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <div class="form-group" align="center">
          <label for="genero">Género</label>
          <select name="genero" id="genero" class="custom-select" style="width:300px">
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
          <!--mensaje para validacion -->
          <div class="invalid-feedback">Completar los datos.</div>
        </div>

        <!--<div class="form-group" align="center">
          <label for="estper">Estado de persona</label>
          <select name="estper" id="estper" class="custom-select"  style="width:300px" >
              <option value ="1">Activado</option>
              <option value ="2">Desactivado</option>                                                        
          </select>-->
        <!--mensaje para validacion -->
        <!--<div class="invalid-feedback">Completar los datos.</div> 
        </div>-->


        <div align="center" class="card-header">
          <input name="" id="" class="btn btn-success" type="submit" value="Agregar Usuarios" onClick="return check_cedula(this.form)" ;>
          <!-- <input action="inicio.php" name="btn" id="btn" class="btn btn-success" type="submit" value="Regresar"  >  -->
        </div>
      </form>
    </div>
  </div>

  




























  <!--<div class="contenedor">

    <div class="contenido-login">

      <form id="formulario_registro">

        <h2>Registrate</h2>

        <div class="input-div nit">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">

            <input type="email" name="name" required placeholder="NOMBRE">
          </div>
        </div>

        <div class="input-div nit">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">

            <input type="email" name="email" required placeholder="CORREO">
          </div>
        </div>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">

            <input type="password" placeholder="CONTRASEÑA" name="clave" required>
          </div>
        </div>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">

            <input type="password" placeholder="CONFIRMAR CONTRASEÑA" name="clave2" required>
          </div>
        </div>

        <div class="row" id="load" hidden="hidden">
          <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
            <img src="assets/img/load.gif" width="100%" alt="">
          </div>
          <div class="col-xs-12 center text-accent">
            <span>Validando información...</span>
          </div>
        </div>

        <input type="button" name="button" id="registro" class="btn" value="Registrate">

      </form>

    </div>
  </div>-->


  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <!-- Js personalizado -->
  <script src="assets/js/operaciones.js"></script>

</body>

</html>