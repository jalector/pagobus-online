<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
if (empty($_POST['correo']) and empty($_POST['contrasena'])){	
$error = "Username or Password is invalid";
}
else
{
	
$correo = $_POST['correo'];
$password = $_POST['contrasena'];
	
	$conn = mysqli_connect("localhost", "root", "", "pagobusonline");
    $query = "SELECT id_tipoUsuario from master where correo=$correo AND contrasena=$password LIMIT 1 " 
    || "SELECT id_tipoUsuario from empleado where correo=$correo AND contrasena=$password LIMIT 1"
    || "SELECT id_tipoUsuario from usuario where correo=$correo AND contrasena=$password LIMIT 1";
if ($query==1) 
{
	    $_SESSION['correo']="$correo";
header("Location: ../app/master/index.php");
exit();
}elseif ($query==2) 
{
	    $_SESSION['correo']="$correo";
header("Location: ../app/admin/index.php");
exit();
}
if ($query==3) 
{
	    $_SESSION['correo']="$correo";
header("Location: ../app/usuario/index.php");
exit();
}
mysqli_close($conn);
}
}
?>