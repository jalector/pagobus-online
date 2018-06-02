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
          <form id="form-registro-usuario" class="mb-3" method="POST" action="../../php/admin/setUser.php"  enctype="multipart/form-data">

            <!-- Imagen de Usuario -->            
            <img id='lbl-profile-image' src='../../resources/profile-img/default.jpg' class='rounded-circle mx-auto d-block img-thumbnail mb-1'
            onclick='abrirSelector()' title='Cambiar foto de perfil'>
          
            <div class="custom-file col-md-4 offset-md-4 mb-3">
              <input id="input-foto" name="input-foto" type="file"  accept=".jpg,.jpeg,.png" onchange="imageNewUser()" style="display: none">
            </div>
            <!-- Identifacador este debe ser rellenado por la variable $_SESSION -->
            
            <!-- Nombre -->
            <div class="form-group col-md-10 offset-md-1">
              <label>Nombre</label>
              <input id="input-nombre" class="form-control " placeholder="Nombre" type='text' name="input-nombre" autocomplete="given-name" required></input>
            </div>
            
            <!-- Apellido-->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-apellido">Apellido</label>
              <input id="input-apellido" name="input-apellido" class="form-control" placeholder="Apellidos" type='text' autocomplete="family-name" required></input>
            </div>

            <!-- Contraseña -->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-contraseña">Contraseña</label>
              <input id="input-contraseña" name="input-contraseña" class="form-control" placeholder="Contraseña" type='password' autocomplete="new-password" required></input>
            </div>

            <!-- Fecha de nacimiento -->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-fecha">Fecha de nacimiento</label>
              <input id="input-fechan" name="input-fechan" class="form-control" placeholder="Fecha de nacimiento" type='date' required></input>
            </div>
            
            <!-- Email-->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-mail">Correo eléctronico</label>
              <input id="input-mail" name="input-mail" class="form-control" placeholder="Email" type='email' required></input>
            </div>

            <!-- Domicilio -->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-domicilio">Domicilio</label>
              <input id="input-domicilio" name="input-domicilio" class="form-control " placeholder="Domicilio" type='text' required></input>
            </div>

            <!-- Colonia -->
            <div class="form-group col-md-10 offset-md-1">
              <label for="input-colonia">Colonia</label>
              <input id="input-colonia" name="input-colonia" class="form-control" placeholder="Colonia" type='text' required></input>
            </div>
            <button id="btn-aceptar" type="submit" class="btn btn-success col-md-2 offset-md-5">Guardar cambios  </button>
          </form>
          
      </div>
    </div>
  </div>
  <script src="../../js/Actualizar_foto.js" type="text/javascript"></script>
  <script src="../../js/admin/registrarUsuario.js"></script>
</body>

</html>