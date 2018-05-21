<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que registra un nuevo usuario en la BD
     * Fecha: 19 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contra = $_POST['contra'];
    $fecha =$_POST['fecha'];
    $colonia = $_POST['colonia'];
    $domicilio = $_POST['domicilio'];
    $correo = $_POST['correo'];

    //Consulta a ejecutar
    $consulta = "insert into Usuario values(null,
                                            '".$contra."',
                                            '".$nombre."',
                                            '".$apellido."',
                                            '".$fecha."',
                                            '/img/user.png',
                                            '".$colonia."',
                                            '".$domicilio."',
                                            '".$correo."',
                                            null,
                                            3,
                                            1);";

    //Ejecutamos la consulta
    $conexion->query($consulta);

    //Cerramos la conexión.
    $conexion->close();
?>