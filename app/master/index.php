<?php
include('../../session.php');

?>
<!DOCTYPE html>
<html>
<!--
  Nombre: Juda Alector Vallejo Herrera
  Descripción: Pantalla principal para la vista del master.
  Fecha: 22 de abril del 2018
-->
<head>
  <title>Master</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
  <link rel="stylesheet" type="text/css" href="../../css/master/main.css">
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
        <p id="bar-master-nombre"><i><?php echo $login_session; ?></p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>

    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2"> 
            <script type="text/javascript" src="../../js/master/navegacion.js"></script>
            <button id="btn-reg" type="button" class="btn boton-opcion">Registrar empleado
            <script type="text/javascript" src="../../js/master/navegacion.js"></script></button>
            <button id="btn-bus" type="button" class="btn boton-opcion">Buscar empleado
            <script type="text/javascript" src="../../js/master/navegacion.js"></script></button>
            <button id="btn-salir" type="button" class="btn boton-opcion">Salir
              <script type="text/javascript" src="../../js/master/navegacion.js"></script>
            </button>

      </div>
      <!-- Contenedor lateral derecho -->
     <div id="der-contenedor" class="col-md-9" >
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h3 class="display-4">Bienvenido</h1>
              <p class="lead">En la Dirección General de Movilidad, asumimos el compromiso de fomentar, promover y gestionar la movilidad no motorizada como medio de transporte público, en específico la bicicleta.</p>
              <hr class="my-4">
              <p>Con el sistema de pagobús podrás ver, revisar y subir tus datos para poder tramitar tu tarjeta pagobús.</p>
            </div>
          </div>
        </div>

    </div>
  </div>
</body>

</html>