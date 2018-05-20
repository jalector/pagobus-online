<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que actualiza los datos de un usuario
     * Fecha: 19 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha =$_POST['fecha'];
    $colonia = $_POST['colonia'];
    $domicilio = $_POST['domicilio'];
    $estado = $_POST['estado'];

    //Consulta a ejecutar ACTUALIZA DATOS DE USUARIO
    $consultaU = "
    UPDATE usuario
    SET usuario.nombre='".$nombre."',
    usuario.apellido='".$apellido."',
    usuario.f_nacimiento='".$fecha."',
    usuario.colonia='".$colonia."',
    usuario.domicilio='".$domicilio."'
    WHERE usuario.id_usuario=".$id.";";
        
    //Ejecutamos la consulta
    $conexion->query($consultaU);

    //consulta a ejecutar ACTUALIZA EL ESTADO DEL USUARIO
    $consultaU = "
    UPDATE estado
    SET estado.tipo_estado='".$estado."'
    WHERE estado.id_status=".$id.";";

    //Ejecutamos la consulta
    $conexion->query($consultaU);

    //Cerramos la conexión.
    $conexion->close();
?>