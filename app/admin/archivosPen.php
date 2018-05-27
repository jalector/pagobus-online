<?php
include('../../php/admin/session.php');

?>
<!DOCTYPE html>
<html>
<!--
  Nombre: Juan Pablo Gallardo Ochoa
  Descripción: Pantalla donde aparecen los archivos por revisar
  Fecha: 15 de mayo del 2018
-->
<head>
  <title>Archivos Pendientes</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/global.css">
  <link rel="stylesheet" type="text/css" href="../../css/admin/archivosPen.css">
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
          <button id="btn-principal" type="button" class="btn boton-opcion">Pagina Principal
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-registrar" type="button" class="btn boton-opcion">Registrar
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-busuario" type="button" class="btn boton-opcion">Buscar usuario
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          <button id="btn-salir" type="button" class="btn boton-opcion">Salir
          <script type="text/javascript" src="../../js/admin/navegacion.js"></script></button>
          </button>
          
      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9">
        <br>
          <center><h3>Archivos Pendientes</h3></center>
          
          <!--Formulario para enviar las actualizaciones de estado a cada documento-->
          <form id="formulario" name="formulario" method="post" action="../../php/admin/actualizarArchivos.php">
          <!-- Tabla de archivos -->
          <br>
            <div id="tablaArchivos" class="justify-content-center"></div>
          </form>
           <!--Contenedor para los botones-->
           <div id="btn-cont">
          <button id="botonActualizar" class="btn">Actualizar Tabla</button>
          <button id="botonGuardar" class="btn" disabled="true" onclick="confirmar()">Guardar Datos</button>
          </div>
      </div>
    </div>
  </div>
  <script>
    function confirmar(){//Funcion para preguntar si se quiere mandar las actualizaciones o no
      swal({
			title: "¿Está seguro de que deseas\nActualizar los estados?",
			text: "Una vez presionado 'OK' los cambios quedaran grabados",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		  })
		  .then((willDelete) => {
			    if (willDelete) {
            var formulario = document.getElementById("formulario");
            formulario.submit();
          }
      });
    }  
  </script>
  <script src="../../js/admin/buscarArchivos.js"></script>
</body>

</html>