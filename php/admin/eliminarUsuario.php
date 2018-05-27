<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que elimina los datos de un usuario asi como tambien
     * todos los registros relacionados con este mismo, como el de estado y 
     * todos los documentos relacionados al usuario
     * Fecha: 26 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $id = $_POST['id'];

    //Consulta a ejecutar ELIMINAR LOS DOCUMENTOS RELACIONADOS CON EL USUARIO
    $consultad = "DELETE FROM documento WHERE documento.id_usuario=".$id.";";        
    //Ejecutamos la consulta
    $conexion->query($consultad);

    //Consulta a ejecutar ELIMINAR AL USUARIO
    $consultau = "DELETE FROM usuario WHERE usuario.id_usuario=".$id.";";        
    //Ejecutamos la consulta
    $conexion->query($consultau);

    //Consulta a ejecutar ELIMINAR EL ESTADO RELACIONADO CON EL USUARIO
    $consultae = "DELETE FROM estado WHERE estado.id_status=".$id.";";        
    //Ejecutamos la consulta
    $conexion->query($consultae);

    //Cerramos la conexión.
    $conexion->close();
?>