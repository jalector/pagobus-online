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
           <br>
          <center><h3>Actualizar datos</h3></center>
          <br>
          <form>
            <div class="form-group">
            </div>
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Nombre" type='text'></input>       
            </div>  
             <div id="img-perf">
              <img src="../../img/user.png" class="rounded mx-auto d-block"><br>
              <input type="file" id="Explorador">
            </div>    
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Apellidos" type='text'></input>        
            </div>  
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Fecha de nacimiento" type='text'></input>      
            </div>  
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Email" type='email'></input>      
            </div>  
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Domicilio" type='text'></input>        
            </div>  
            <div class="form-group">
              <input class="form-control col-md-5 offset-md-2" placeholder="Colonia" type='text'></input>      
            </div>  
        
            <div class="form-group offset-md-2">
              <p>
                Recibo de inscripción/colegiatura/constancia de estudios
                que contenga: nombre completo del alumno, sello oficial de la escuela, ciclo escolar y firma del director.
                <input type="file" accept=".jpg,.jpeg,.png"/>
              </p>
            </div>
            <br>
            <div class="form-group offset-md-2">
              <p>
                Credencial escolar, certificado de estudios anterior o identificación
                oficial(INE, pasaporte o licencia de manejo).
                <br>
                <input type="file" accept=".jpg,.jpeg,.png"/>
              </p>
            </div>
            <br>
            <div class="form-group offset-md-2">
              <p id="nota">
                <label id="lbl-nota">Nota: Los archivos y datos que usted proporcione serán validados por un empleado del SIT y en caso de que estos sean inválidos su trámite será rechazado.</label>
              </p>
            </div>
            <button id="btn-aceptar" type="button" class="btn btn-success col-md-2 offset-md-5" >Aceptar</button>
            <div class="form-group">
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>
