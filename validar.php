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

	$query = "SELECT id_tipoUsuario from usuario where correo=? AND contrasena=? LIMIT 1";
	$query2 = "SELECT id_tipoUsuario from empleado where correo=? AND contrasena=? LIMIT 1";

$query3 = "SELECT id_tipoUsuario from master where correo=? AND contrasena=? LIMIT 1";


if ("id_tipoUsuario"==1) 
{
header("Location: app/master/index.php");
exit();
}elseif ("id_tipoUsuario"==2) 
{
header("Location: app/admin/index.html");
exit();
}
if ("id_tipoUsuario"==3) 
{
header("Location: app/usuario/index.html");
exit();
}
mysqli_close($conn);
}
}
?>