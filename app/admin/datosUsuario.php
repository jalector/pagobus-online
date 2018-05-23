<?php
<<<<<<< HEAD:app/admin/datosUsuario.php
include('../../session.php');
=======
include('../../php/admin/session.php');
>>>>>>> 87bed4ae1b718828213caf0bc7740f9c9973a422:app/admin/datosUsuario.php

?>
<!DOCTYPE html>
<html>
<!--
  Nombre: Juan Pablo Gallardo Ochoa
  Descripción: Pantalla para revisar los datos de un usuario individualmente
  Fecha: 15 de mayo del 2018
-->
<head>
  <title>Datos de Usuario</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
  <link rel="stylesheet" type="text/css" href="../../css/admin/datosUsuario.css">
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
        <p id="bar-usuario-nombre"><i><?php echo $login_session; ?></i></p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>

    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script>
<<<<<<< HEAD:app/admin/datosUsuario.php
          <button id="btn-principal" type="button" class="btn boton-opcion">Pagina Principal
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-registrar" type="button" class="btn boton-opcion">Registrar
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-busuario" type="button" class="btn boton-opcion">Buscar usuario
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-archivo" type="button" class="btn boton-opcion">Archivos
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-salir" type="button" class="btn boton-opcion">Salir</script>  
=======
          <button id="btn-principal" type="button" class="btn boton-opcion">Pagina Principal</button>
          <button id="btn-registrar" type="button" class="btn boton-opcion">Registrar</button>
          <button id="btn-busuario" type="button" class="btn boton-opcion">Buscar usuario</button>
          <button id="btn-archivo" type="button" class="btn boton-opcion">Archivos</button>
          <button id="btn-salir" type="button" class="btn boton-opcion">Salir
          <script type="text/javascript" src="../../js/Salir.js"></script>  
>>>>>>> 87bed4ae1b718828213caf0bc7740f9c9973a422:app/admin/datosUsuario.php
          </button>

      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9">
          <!-- Contenedor para los datos-->
            <div id="datos-cont" data-id-usuario="<?php echo $_GET['idUser']; ?>" >
              <label for="txt_nombre">Nombre</label><br>
              <input type="text" id="txt_nombre" ><br>

              <label for="txt_apellido">Apellido</label><br>
              <input type="text" id="txt_apellido" ><br>

              <label for="txt_fNacimiento">Fecha de Nacimiento</label><br>
              <input type="text" id="txt_fNacimiento" ><br>

              <label for="txt_colonia">Colonia</label><br>
              <input type="text" id="txt_colonia" ><br>

              <label for="txt_domicilio">Domicilio</label><br>
              <input type="text" id="txt_domicilio" ><br>
            </div>
        <!-- Contenedor para la imagen y estus-->
            <div id="imagen-cont">
              <br><br><br>
              <img src="../../img/user.png" class="rounded mx-auto d-block"><br>
              <label for="txt_status">Status:</label>
              <input type="text" id="txt_status" ><br>
            </div>
        <!-- Contenedor para la tabla de documentos-->
            <div id="tablaD-cont"></div>
        <!-- Contenedor para los botones-->
            <div id="btn-cont">
                <button id="btn-Guardar" class="btn">Guardar</button>
            </div>
      </div>
    </div>
  </div>
  <script src="../../js/admin/verDatos.js"></script>
</body>

</html>