<?php 
    include '../../php/login/session.php';
    session_start();
    if(!checkPermission($_SESSION['tipo'])){
      header("Location: ../server-errors/no_login.html");
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
  <title>Ver Estado</title>
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
        <p id="bar-usuario-nombre"><i><?php echo $_SESSION['nombre']; ?></p>
        <a>
           <div id="preview">
            <?php 
              $foto = '../../resources/profile-img/img'.$_SESSION["id"].'.jpg';
              if (file_exists($foto)) {
                $foto = "img".$_SESSION["id"];
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
          <button id="btn-registrar" type="button" class="btn boton-opcion">Actualizar datos
          </button>
          <button id="btn-solicitabaja" type="button" class="btn boton-opcion">Solicitar baja
          </button>
          <button id="btn-Vestado" type="button" class="btn boton-opcion">Ver estado
          </button>
          <button id="btn-salir" type="button" class="btn boton-opcion">Salir
          </button>
      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9" >
          <div class="form-group ">
        <center><h3>Estado Actual</h3></center>
        </div>
        <!-- Imagen de Usuario -->
          <?php 
              $foto = '../../resources/profile-img/img'.$_SESSION["id"].'.jpg';
              if (file_exists($foto)) {
                $foto = "img".$_SESSION["id"];
              } else {
                $foto = "default";
              }
              echo "<img id='lbl-profile-imageE' src='../../resources/profile-img/$foto.jpg' class='rounded-circle mx-auto d-block img-thumbnail mb-1'
              onclick='abrirSelector()'>";
          ?>
          <div class="custom-file col-md-4 offset-md-4 mb-3"></div>
        <form id="formulario-estado">
          <?php
          include '../../php/usuario/getEstado.php';
          ?>
        </form>
      </div>

    </div>
  </div>
  <script type="text/javascript" src="../../js/usuario/navegacion.js"></script>
  <script type="text/javascript" src="../../js/usuario/Modal.js"></script>
</body>

</html>