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
  Nombre: Juan Pablo Gallardo Ochoa
  Descripción: Pantalla para registrar un usuario en la BD.
  Fecha: 13 de mayo del 2018
-->
<head>
  <title>Registrar Usuario</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
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
        <p id="bar-usuario-nombre"><i><?php echo $_SESSION['nombre']; ?></i></p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>

    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">

        <script type="text/javascript" src="../../js/admin/navegacion.js"></script>  
        <button id="btn-principal" type="button" class="btn boton-opcion">Pagina Principal</button>
        <button id="btn-busuario" type="button" class="btn boton-opcion">Buscar usuario</button>
        <button id="btn-archivo" type="button" class="btn boton-opcion">Archivos</button>
        <button id="btn-salir" type="button" class="btn boton-opcion">Salir
        <script type="text/javascript" src="../../js/Salir.js"></script>
        </button>
      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9">
        <br>
          <center><h3>Registro de usuario</h3></center>
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
                  <td><label for="txt_fechaNa">Fecha de nacimiento</label></td> 
                  <td><input type="text" id="txt_fechaNa"></td>            
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
          <div id="img-usr">
            
            <img id="imagen-s" src="../../img/user.png" class="rounded mx-auto d-block"><br>
            <input id="file" type="file" />
          </div>
      </div>
    </div>
  </div>
  <script src="../../js/admin/registrarUsuario.js"></script>
</body>

</html>