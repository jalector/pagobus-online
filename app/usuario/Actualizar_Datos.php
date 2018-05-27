<?php 
    include '../../php/login/session.php';
    session_start();
    if(!checkPermission($_SESSION['tipo'])){
      header("Location: ../server-errors/error_404.html");
    }
?>
<!DOCTYPE html>
<html>
<!--
    Nombre: Angel Hernández Rivera
    Descripción: Pantalla de actualizar datos para usuario.
    Fecha: 15 de Mayo del 2018
-->

<head>
  <title>Actualizar Datos</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
  <link rel="stylesheet" type="text/css" href="../../css/usuario/main.css">
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <script src="../../lib/jquery-3.3.1.js"></script>
  <script src="../../lib/popper.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="../../lib/node_modules/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>


  <div id="main-contenedor" class="container max-width">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div>
        <input type="image" alt="Home" src="../../img/logo.png" id="bar-logo">
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">

        </ul>
        <p id="bar-usuario-nombre"><i><?php echo $_SESSION["nombre"]; ?></i></p>
        <a>
          <div id="preview">
            <?php 
              if (file_exists('../../resources/profile-img/'.$_SESSION["id"].'.jpg')) {
                $foto = $_SESSION["id"];
              } else {
                $foto = "default";
              }
              echo ("<img src='../../resources/profile-img/".$foto.".jpg' id='bar-usuario-imagen'></img>");
            ?>
        </div>
        </a>
      </div>
    </nav>


    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">
        <button id="btn-inicio" type="button" class="btn boton-opcion">Pagina Principal
        </button>
        <button id="btn-solicitabaja" type="button" class="btn boton-opcion">Solicitar baja
        </button>
        <button id="btn-Vestado" type="button" class="btn boton-opcion">Ver estado
        </button>
        <button id="btn-salir" type="button" class="btn boton-opcion">Salir
        </button>

      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9" data-id-usuario="<?php echo $_SESSION['id']; ?>">
        <h3 class="container display-7 text-center mt-3">Actualizar datos</h3>

        <form id="form-registro-usuario" class="mb-3" method="POST" action="../../php/usuario/registrarUsuario.php"  enctype="multipart/form-data">

          <!-- Imagen de Usuario -->
          <?php 
          $foto = '../../resources/profile-img/'.$_SESSION["id"].'.jpg';
          if (file_exists($foto)) {
            $foto = $_SESSION["id"];
          } else {
            $foto = "default";
          }
          
          echo ("<img id='lbl-profile-image' src='../../resources/profile-img/".$foto.".jpg' class='rounded-circle mx-auto d-block img-thumbnail mb-1'
          onclick='abrirSelector()'' title='Cambiar foto de perfil'>");
         
          ?>
          <div class="custom-file col-md-4 offset-md-4 mb-3">
            <input id="input-foto" name="input-foto" type="file"  accept=".jpg,.jpeg,.png" onchange="readImage()" style="display: none">
          </div>
          <!-- Identifacador este debe ser rellenado por la variable $_SESSION -->
          <div class="form-group col-md-3 offset-md-1">
              <label>No. identificación</label>
              <input id="input-id" class="form-control"  type='number' name="input-id" <?php echo 'value="'.$_SESSION['id'].'"'; ?></input>
            </div>

          <!-- Nombre -->
          <div class="form-group col-md-10 offset-md-1">
            <label>Nombre</label>
            <input id="input-nombre" class="form-control " placeholder="Nombre" type='text' name="input-nombre" autocomplete="given-name"></input>
          </div>
          
          <!-- Apellido-->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-apellido">Apellido</label>
            <input id="input-apellido" name="input-apellido" class="form-control" placeholder="Apellidos" type='text' autocomplete="family-name"></input>
          </div>

          <!-- Contraseña -->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-contraseña">Contraseña</label>
            <input id="input-contraseña" name="input-contraseña" class="form-control" placeholder="Contraseña" type='password'></input>
          </div>

          <!-- Fecha de nacimiento -->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-fecha">Fecha de nacimiento</label>
            <input id="input-fechan" name="input-fechan" class="form-control" placeholder="Fecha de nacimiento" type='date'
            ></input>
          </div>
          
          <!-- Email-->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-mail">Correo eléctronico</label>
            <input id="input-mail" name="input-mail" class="form-control" placeholder="Email" type='email' autocomplete="email"></input>
          </div>

          <!-- Domicilio -->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-domicilio">Domicilio</label>
            <input id="input-domicilio" name="input-domicilio" class="form-control " placeholder="Domicilio" type='text'></input>
          </div>

          <!-- Colonia -->
          <div class="form-group col-md-10 offset-md-1">
            <label for="input-colonia">Colonia</label>
            <input id="input-colonia" name="input-colonia" class="form-control" placeholder="Colonia" type='text'></input>
          </div>

          <!-- Recibo de inscripción -->
          <div class="form-group offset-md-1 col-md-10">
            <label>Recibo de inscripción/colegiatura/constancia de estudios que contenga: nombre completo del alumno, sello oficial
              de la escuela, ciclo escolar y firma del director.</label>
            <div class="">
              <input id="input-recibo" name="input-recibo" type="file"  accept=".jpg" lang="es" />
            </div>
          </div>

          <!-- Identificación -->
          <div class="form-group offset-md-1 col-md-10">
            <label>Credencial escolar, certificado de estudios anterior o identificación oficial(INE, pasaporte o licencia de manejo).</label>
            <div class="">
              <input id="input-identificacion" name="input-identificacion" type="file"  accept=".jpg" lang="es" />
            </div>
          </div>
          <div class="form-group offset-md-1 col-md-10">
            <label id="lbl-nota" class="p-3">Nota: Los archivos y datos que usted proporcione serán validados por un empleado del SIT y en caso de que estos
              sean inválidos su trámite será rechazado.</label>
          </div>
          <div id="form-error" class="alert alert-warning col-md-10 text-center offset-md-1 animated bounceInLeft"  role="alert">
            Para poder guardar, necesitas hacer cambios primero
          </div>
          <button id="btn-aceptar" type="submit" class="btn btn-success col-md-2 offset-md-5" disabled>Guardar cambios  </button>
        </form>
      </div>
    </div>
  </div>
  <script src="../../js/Actualizar_foto.js" type="text/javascript"></script>
  <script src="../../js/usuario/registrarUsuario.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../js/usuario/navegacion.js"></script>
  <script type="text/javascript" src="../../js/usuario/Modal.js"></script>
  <script src="../../js/usuario/AutocompletarForm.js"></script> 
</body>
</html>