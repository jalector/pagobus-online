<!DOCTYPE html>
<html>
   <head>
      <title>Pagobús Online</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="css/global.css">
      <link rel="shortcut icon" type="image/ico" href="img/main_ico.ico">
      <link rel="stylesheet" type="text/css" href="lib/animate.css">
      <link rel="stylesheet" type="text/css" href="lib/bootstrap-4.0.0/dist/css/bootstrap.min.css">
      <script src="lib/jquery-3.3.1.js"></script>
      <script src="lib/popper.js"></script>
      <script type="text/javascript" src="lib/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
   </head>
   <body class="text-center">
      <!-- Imagén -->
      <div class="col-md-4 container animated bounceInLeft">
         <img id="img-leon" src="img/index/Leon.png">
      </div>
      <!-- Incio -->
      <div id="login-form" class="container col-md-4 text-center animated bounceInRight">
         <form action="php/login/login.php" method="POST" enctype="application/x-www-form-urlencoded">
            <h2>Pagobús Online</h2>
            <div  class="form-group">
               <input class="form-control" name="correo" placeholder="Email" type='email' required=""></input>				
            </div>
            <div class="form-group">
               <input class="form-control" name ="contrasena" placeholder="Contraseña" type="password" required=""></input>
            </div>
            <div class="alert alert-danger animated bounce delay-2" role="alert" <?php if(count($_GET) > 0) { if($_GET['error'] != 1){ echo "hidden"; }}else{echo "hidden";}?>>
                  Usuario o contraseña incorrecto
            </div>	
            <div class="row text-center">
               <button type="submit" class="btn btn-success col-md-4 offset-md-1">Iniciar sesión</button>
               <button type="button" class="btn btn-info col-md-4 offset-md-2"  data-toggle="modal" data-target="#registro-modal"> Registrarme</button>
            </div>
         </form>
         
      </div>

        <!-- Registro --> 
      <div class="modal fade" id="registro-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
            <div class="modal-dialog modal-dialog-centered" role="document"> 
                  <div class="modal-content"> 
                        <div class="modal-header"> 
                              <h5 class="modal-title" id="exampleModalLongTitle">Registra tus datos</h5> 
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                    <span aria-hidden="true">&times;</span> 
                              </button> 
                        </div> 
                        <div class="modal-body text-center"> 
                              <form action="php/login/register.php" method="POST">
                                    <div class="form-group"> 
                                          <img src="img/index/leyenda_pagobus.png" style="max-width:100%;"> 
                                    </div> 
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Nombre(s)" name="nombre" type='text'></input> 
                                    </div> 
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Apellido(s)" name="apellido" type='text'></input> 
                                    </div> 
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Fecha de nacimiento" name="fnacimiento" type='date'></input> 
                                    </div>
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Email" name="mail" type="email"></input> 
                                    </div>
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Colonia" name="colonia" type='text'></input> 
                                    </div> 
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Domicilio" name="domicilio" type='text'></input> 
                                    </div> 
                                    <div class="form-group"> 
                                          <input class="form-control" placeholder="Contraseña" name="password" type="password"></input> 
                                    </div> 
                                    <div class="modal-footer"> 
                                          <button type="submit" class="btn btn-success">Iniciar sesion</button> 
                                    </div> 
                              </form>   
                        </div> 
                  </div> 
            </div> 
      </div> 
   </body>
</html>
