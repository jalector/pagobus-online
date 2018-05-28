<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que registra un nuevo usuario en la BD
     * Fecha: 19 de Mayo del 2018
     */

    include '../conexion.php';
    session_start();
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    
    $nombre = $_POST['input-nombre'];
    $apellido = $_POST['input-apellido'];
    $password = $_POST['input-contraseña'];
    $fecha =$_POST['input-fechan'];
    $colonia = $_POST['input-colonia'];
    $domicilio = $_POST['input-domicilio'];
    $correo = $_POST['input-mail'];

    //Consulta a ejecutar Para agregar un nuevo usuario
    $conexion->query("insert into Historial values(null, 'nuevo_usuario', 'Registrado por ".$_SESSION["nombre"]."', " .$_SESSION["id"]. ")");
    $idHistorial = $conexion->query("select id_Historial as id from Historial order by id_Historial desc limit 1")->fetch_assoc()['id'];
    $conexion->query("insert into Estado values (null, 'pendiente', curdate(), $idHistorial)");
    $conexion->query("insert into Usuario values (null, '$password', '$nombre', '$apellido', '$fecha', 'default', '$colonia', '$domicilio', '$correo',null, 3, $idHistorial)");      
    //Cerramos la conexión.
    $conexion->close();
    upload($_FILES["input-foto"], "../../resources/profile-img/img",$idHistorial.".jpg");

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Sube los archivos a una ubicación del servidor.
     * Feccha
     */
    function upload($file, $location, $name){
        move_uploaded_file($file["tmp_name"], $location.$name);
    }
?>