<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
if (empty($_POST['correo']) and empty($_POST['contrasena'])){   
$error = "Username or Password is invalid";
}
else
{
    $conn = mysqli_connect("localhost", "root", "", "pagobusonline");
$correo = mysqli_real_escape_string($conn,$_POST['correo']);
$password = mysqli_real_escape_string($conn,$_POST['contrasena']);
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el correo que está intentando acceder */
$usuario  = mysqli_query ("SELECT correo,contrasena FROM usuario  WHERE correo = '$correo' AND contrasena = '$password' LIMIT =1");
$empleado = mysqli_query ("SELECT correo,contrasena FROM empleado WHERE correo = '$correo' AND contrasena = '$password'LIMIT =1 " );
$master   = mysqli_query ("SELECT correo,contrasena FROM master   WHERE correo = '$correo' AND contrasena = '$password' LIMIT =1");
 
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if(mysql_num_rows($usuario) > 0) 
{

 
    $_SESSION['correo']="$correo";
 
    /* Nos dirigimos al espacio de los usuarios usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: app/usuario/index.html");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un empleado */
else if(mysql_num_rows($empleado) > 0) 
{
    $_SESSION['correo']="$correo";
    header("Location: app/admin/index.html");
    exit(); 
}
 
//comprobamos si es un master el que intenta abrir la sesión
else if(mysql_num_rows($master) > 0) 
{
    session_start();
    $_SESSION['correo']="$correo";
    header("Location: app/master/index.html");
    exit();
} 
else 
{
   /* Si no el correo no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El correo y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
}
}}
?>