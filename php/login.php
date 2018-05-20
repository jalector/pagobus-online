<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "pagobusonline");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT correo, contraseña from usuarios where correo=? AND contraseña=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $correo, $contraseña);
$stmt->execute();
$stmt->bind_result($correo, $contraseña);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $correo; // Initializing Session
          header("location: profile.php"); // Redirecting To Profile Page
        }
else {
       $error = "Correo o Contraseña invalida";
     }
mysqli_close($conn); // Closing Connection
}
}
?>