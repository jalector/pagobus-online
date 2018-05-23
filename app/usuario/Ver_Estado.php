<?php
include('../../session.php');

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
        <p id="bar-usuario-nombre"><i><?php echo $login_session; ?></p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>

    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">
          <button id="btn-registrar" type="button" class="btn boton-opcion">Actualizar datos
              <script type="text/javascript" src="../../js/usuario/navegacion.js"></script>
          </button>
          <button id="btn-solicitabaja" type="button" class="btn boton-opcion">Solicitar baja
            <script type="text/javascript" src="../../js/usuario/Modal.js"></script>
          </button>
          <button id="btn-Vestado" type="button" class="btn boton-opcion">Ver estado
              <script type="text/javascript" src="../../js/usuario/navegacion.js"></script>
          </button>
          <button id="btn-salir" type="button" class="btn boton-opcion">Salir
              <script type="text/javascript" src="../../js/usuario/navegacion.js"></script>
          </button>
      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9" >
                  <div class="form-group ">
                    <br>
           <center><h3>Estado Actual</h3></center>
          </div>
        <form id="formulario">
          <div class="form-group ">
          </div>
          <div class="form-group ">
            <label id="lbl-nombre" class="label offset-md-1"><b>Nombre(s): </b>Angel</label>
          </div>
          <div class="form-group ">
            <label id="lbl-apellidos" class="label offset-md-1"><b>Apellido(s): </b>Hernández Rivera</label>
          </div>
          <div class="form-group ">
            <label id="lbl-fnacimiento" class="label offset-md-1"><b>Fecha de nacimiento: </b>08/11/1997</label>
          </div>
          <div class="form-group ">
            <label id="lbl-correo" class="label offset-md-1"><b>Email: </b>angelhr0811@gmail.com</label>
          </div>
          <div class="form-group ">
            <label id="lbl-domicilio" class="label offset-md-1"><b>Domicilio: </b>Camelinas 879</label>
          </div>
          <div class="form-group ">
            <label id="lbl-estado" class="label offset-md-1"><b>Estado de la solicitud: </b>Solicitud aceptada</label>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>

</html>