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
    Nombre: Valentina Rojas Vàzquez
    Descripción: Pantalla de busqueda de empleados.
    Fecha: 17 de Mayo del 2018
  -->

<head>
  <title>Buscar Empleado</title>
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
        <p id="bar-master-nombre"><i><?php echo $_SESSION['nombre']; ?></p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>
    <!--  Contenedor Principal -->
    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">
        <script type="text/javascript" src="../../js/master/navegacion.js"></script>
        <button id="btn-reg" type="button" class="btn boton-opcion">Registrar empleado
        <script type="text/javascript" src="../../js/master/navegacion.js"></script></button>
        <button id="btn-bus" type="button" class="btn boton-opcion">Buscar empleado
        <script type="text/javascript" src="../../js/master/navegacion.js"></script></button>
        <button id="btn-salir" type="button" class="btn boton-opcion">Salir
        <script type="text/javascript" src="../../js/master/navegacion.js"></script></button>
      </div>

      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9 container">
        <!-- Texto informativo -->
        <div class="container text-center">
          <h1>Búsqueda de empleados</h1>
          <p>Realiza la búsqueda de empleados por id, nombre o correo electrónico</p>
        </div>
        <!-- Barra para buscar -->
        <div class="row justify-content-center margin-10">
          <div class="input-group col-9">
            <input id="buscador-input" type="number" min="0" class="form-control" placeholder="Busca por medio de id">
            <select id="buscador-tipo" class="custom-select input-group-append col-3">
                <option value="id" selected>ID</option>
                <option value="nombre">Nombre</option>
                <option value="correo">Correo</option>
                <option value="contratacion">Contratación</option>
              </select>
            <button id="buscador-boton" type="button" class="btn btn-success" style="margin-left: 10px;">Buscar</button>
          </div>
        </div>
        <!--    Tabla de usuario -->
        <div id="tablaEmpleados" class="justify-content-center margin-10"></div>
      </div>
    </div>
  </div>
   <script src="../../js/master/buscarEmpleado.js"></script>
</body>
</html>