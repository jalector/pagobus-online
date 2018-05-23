<?php
	require('conexion.php');
	if(empty($_SESSION['nombre'])){
	session_start();
?>


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
		<form action="loginPHP/validar.php" method="POST" enctype="application/x-www-form-urlencoded">
			<h2>Pagobús Online</h2>
			<div  class="form-group">
				<input class="form-control" name="correo" placeholder="Email" type='email' required=""></input>				
			</div>
			<div class="form-group">
				<input class="form-control" name ="contrasena" placeholder="Contraseña" type="password" required=""></input>
			</div>			
			<div class="row text-center">
			<button name="submit" type="submit" class="btn btn-success col-md-4 offset-md-1">Iniciar sesión
</button>
</form>
<button type="button" class="btn btn-info col-md-4 offset-md-2"  data-toggle="modal" data-target="#registro-modal"> Registrarme</button>
<br />
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
				
			</div>
		</form>		
	</div>

	

	      </div>
	    </div>
	  </div>
	</div>

</body>
</html>
