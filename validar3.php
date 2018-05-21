<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['correo']) || empty($_POST['contrasena'])) {
<<<<<<< HEAD:validar3.php
$error = "Username or Password is invalid";
=======
  $error = "Correo o contraseña invalidos";
>>>>>>> b5c7d79dddb005a722b4c16d349204598e847be8:login.php
}
else
{
// Define $correo and $password
$correo = $_POST['correo'];
$password = $_POST['contrasena'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "pagobusonline");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT correo, contrasena from empleado where correo=? AND contrasena=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $correo, $password);
$stmt->execute();
$stmt->bind_result($correo, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $correo; // Initializing Session
          header("location: app/admin/index.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>