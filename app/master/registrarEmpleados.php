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
  Descripción: Pantalla para hacer el registro de un nuevo empleado.
  Fecha: 17 de mayo del 2018
-->
<head>
  <title>Registrar Empleado</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
  <link rel="stylesheet" type="text/css" href="../../css/master/main.css">
  <link rel="stylesheet" type="text/css" href="../../css/admin/regUsuario.css">
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
        <script type="text/javascript" src="../../js/master/navegacion.js"></script> </button>
      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9">
        <br>
          <center><h3>Registro de empleados</h3></center>
          <!-- Creacion de un contenedor para generar el formulario de llenado-->
          <div id="formulario">
            <!--Tabla para dar mejor formatoa a los componenres-->
            <table>
              <tr>
                  <td><label for="txt_nombre">Nombre(s)</label></td> 
                  <td><input type="text" id="txt_nombre"></td>            
              </tr>
              <tr>
                  <td><label for="txt_apellido">Apellido(s)</label></td> 
                  <td><input type="text" id="txt_apellido"></td>            
              </tr>
              <tr>
                  <td><label for="txt_edad">Edad</label></td> 
                  <td><input type="text" id="txt_edad"></td>            
              </tr>
              <tr>
                  <td><label for="txt_fechaCo">Fecha de contratacion</label></td> 
                  <td><input type="text" id="txt_fechaCo"></td>            
              </tr>
              <tr>
                  <td> <label for="txt_correo">Correo</label></td> 
                  <td><input type="email" id="txt_correo"></td>            
              </tr>
              <tr>
                  <td><label for="txt_colonia">Colonia</label></td> 
                  <td><input type="text" id="txt_colonia"></td>            
              </tr>
              <tr>
                  <td> <label for="txt_domicilio">Domicilio</label></td> 
                  <td><input type="text" id="txt_domicilio"></td>            
              </tr>
              <tr>
                  <td> <label for="txt_contrasena">Contraseña</label></td> 
                  <td> <input type="password" id="txt_contrasena"></td>            
              </tr>
              <tr>
                  <td><label for="txt_confirmCon">Confirme contraseña</label></td> 
                  <td><input type="password" id="txt_confirmCon"></td>            
              </tr>
            </table>
            <!--Boton para realizar el registro-->
               <button id="btn-guardar" type="button" class="btn btn-formulario">Registrar Usuario
               </button>
               
          </div>
          <!--Contenedor para ingresar la imagen del usuario-->         
      </div>
    </div>
  </div>
  <script src="../../js/master/registrarEmpleado.js"></script>
</body>
</html>