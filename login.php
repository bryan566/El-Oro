<?php
require 'assets/db/config.php';
if (isset($_POST['login'])) {
  $errMsg = '';

  // Get data from FORM
  $usuario = $_POST['usuario'];

  $clave = MD5($_POST['clave']);

  if ($usuario == '')
    $errMsg = 'Digite su usuario';
  if ($clave == '')
    $errMsg = 'Digite su contraseña';

  if ($errMsg == '') {
    try {
      $stmt = $connect->prepare('SELECT id, nombre, usuario, email,clave, cargo FROM usuarios WHERE usuario = :usuario UNION SELECT codpaci, nombrep,apellidop, usuario, clave, cargo FROM paciente WHERE usuario = :usuario');


      $stmt->execute(array(
        ':usuario' => $usuario


      ));
      $data = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($data == false) {
        $errMsg = "Usuario $usuario no encontrado.";
      } else {
        if ($clave == $data['clave']) {

          $_SESSION['id'] = $data['id'];
          $_SESSION['nombre'] = $data['nombre'];
          $_SESSION['codpaci'] = $data['codpaci'];
          $_SESSION['usuario'] = $data['usuario'];
          $_SESSION['email'] = $data['email'];
          $_SESSION['clave'] = $data['clave'];
          $_SESSION['cargo'] = $data['cargo'];


          if ($_SESSION['cargo'] == 1) {
            header('Location: vista/admin/admin.php');
          } else if ($_SESSION['cargo'] == 2) {
            header('Location: vista/user/user.php');
          }


          exit;
        } else
          $errMsg = 'Contraseña incorrecta.';
      }
    } catch (PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Login 4</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css " href="assets/css/style.css">
  <link rel="stylesheet" type="text/css " href="assets/css/css/all.min.css">
  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <style>
    .slider {
      background: url("assets/img/bg-3.png");
      background-size: cover;
      background-position: center;
      height: 440px;
      top: -17px;
    }
  </style>
</head>

<body>

  <div>
    <navbar>
      <a href="principal.php" type="button" class="btn btn-outline-warning mt-1">Inicio</a>
    </navbar>

    <div class="container-fluid slider text-white d-flex flex-column justify-content-center align-items-center">

      <!---->
      <div class="contenedor">

        <div class="contenido-login">

          <!--<form autocomplete="off" method="POST" role="form">

            <?php
            if (isset($errMsg)) {
              echo '<div style="color:#FF0000;text-align:center;font-size:20px;">' . $errMsg . '</div>';
            }
            ?>
            <div class="input-div nit">
              <div class="i">
              </div>
              <div class="div">

                <input type="text" name="usuario" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" placeholder="USUARIO">
              </div>
            </div>
            <div class="input-div pass">
              <div class="i">
              </div>
              <div class="div">
                <input type="password" required="true" name="clave" value="<?php if (isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" placeholder="CONTRASEÑA">
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


            <button class="btn btn-success" name='login' type="submit"> Iniciar sesion
            </button>

          </form>-->

          <form id="form_ingreso" name="form_ingreso" method="POST" role="form">
            <table width="700" border="0" align="center">
              <tr>
                <td width="400">
                  <div align="right" class="Estilo2 Estilo4">Usuario</div>
                </td>
                <td width="180"><label>
                    <input type="text" name="usuario" value="<?php if (isset($_POST['usuario'])) echo $_POST['usuario'] ?>" autocomplete="off" placeholder="">

                    <!--<input name="cedula" type="text" id="cedula" onkeyup="this.value=this.value.replace();" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="20" maxlength="10" />-->

                  </label></td>
              </tr>

              <tr>
                <td>
                  <div align="right" class="Estilo3">Contraseña</div>
                </td>
                <td><label>
                    <!--<input name="contrasena" type="password" id="contrasena" onkeyup="this.value=this.value.replace();" onkeyup="this.value=this.value.replace(/[^0-9]/, '');" size="20" maxlength="10" />-->
                    <input type="password" required="true" name="clave" value="<?php if (isset($_POST['clave'])) echo MD5($_POST['clave']) ?>" placeholder="">

                  </label></td>
              </tr>

              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>

              <tr>
                <td colspan="2">
                    <button class="btn btn-danger" name='login' type="submit"> Iniciar sesion</button>
                </td>
              </tr>

            </table>
            <div class="">
              <div id="link"><a class="text-white ml-6 p-5" href="registro.php">Registrate en Línea</a></div>
            </div>
          </form>





          <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>

        </div>
      </div>
    </div>



  </div>


</body>

</html>