<!DOCTYPE html>
<html>
<head>
  <title>Buscar usuario</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/ico" href="../../img/main_ico.ico">
  <link rel="stylesheet" type="text/css" href="../../lib/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  <link rel="stylesheet" type="text/css" href="../../lib/bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <script src="../../lib/jquery-3.3.1.js"></script>
  <script src="../../lib/popper.js"></script>
  <script type="text/javascript" src="../../lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

  <style>
    .margin-10{
      margin:10px;
    }
    .no-padding{
      padding: 0px;
    }
  </style>
</head>

<body>


  <div id="main-contenedor" class="container max-width">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="">
        <img src="../../img/logo.png" id="bar-logo"></img>
      </a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        </ul>
        <p id="bar-usuario-nombre">Juan Alberto</p>
        <a>
          <img src="../../img/user.png" id="bar-usuario-imagen"></img>
        </a>
      </div>
    </nav>

    <div class="container-fluid row" style="margin-top:30px">
      <!-- Contenedor lateral izquierdo -->
      <div id="izq-contenedor" class="col-md-2">
        <button id="btn-registrar" type="button" class="btn boton-opcion">Registrar</button>
        <button id="btn-busuario" type="button" class="btn boton-opcion">Buscar usuario</button>
        <button id="btn-archivo" type="button" class="btn boton-opcion">Archivo</button>
        <button id="btn-salir" type="button" class="btn boton-opcion">Salir</button>

      </div>
      <!-- Contenedor lateral derecho -->
      <div id="der-contenedor" class="col-md-9 container" >
        <!-- Barra para buscar -->   
        <div class="row justify-content-center margin-10">
          <div class="input-group col-8">
            <input type="text" class="form-control" placeholder="Busca a un usuario">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Buscar</button>
            </div>
          </div>
        </div>
        <div class="row justify-content-center margin-10">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cooreo</th>
                    <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>Juan Alberto</td>
                    <td>juda_alector@hotmail.com</td>
                    <td>Pendiente</td>
                  </tr>
                </tbody>
              </table>
        </div>

       
      </div>

    </div>
  </div>
</body>

</html>