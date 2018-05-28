<?php
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Archivo que registra un nuevo usuario en la bd.
     * Fecha: 27 de Mayo del 2018
     */

    include '../conexion.php';
    include 'session.php';
    $conexion = conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = $_POST['password'];
    $fecha =$_POST['fnacimiento'];
    $colonia = $_POST['colonia'];
    $domicilio = $_POST['domicilio'];
    $correo = $_POST['mail'];

    //Consulta a ejecutar Para agregar un nuevo usuario
    $conexion->query("insert into Historial values(null, 'nuevo_usuario', 'Registro por usuario', null)");
    $idHistorial = $conexion->query("select id_Historial as id from Historial order by id_Historial desc limit 1")->fetch_assoc()['id'];
    $conexion->query("insert into Estado values (null, 'pendiente', curdate(), $idHistorial)");
    $conexion->query("insert into Usuario values (null, '$password', '$nombre', '$apellido', '$fecha', 'default', '$colonia', '$domicilio', '$correo',null, 3, $idHistorial)");      
    startSessionWith(array("id" => $idHistorial, "nombre" => ($nombre. ' '. $apellido), "tipo" => 3,  "correo" => $correo));

    //Cerramos la conexión.
    $conexion->close();
?>