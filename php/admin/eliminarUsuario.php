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
    $consultad = "DELETE FROM Documento WHERE Documento.id_usuario=".$id.";";        
    //Ejecutamos la consulta
    $conexion->query($consultad);

    //Consulta a ejecutar ELIMINAR AL USUARIO
    $consultau = "DELETE FROM Usuario WHERE Usuario.id_usuario=".$id.";";        
    //Ejecutamos la consulta
    $conexion->query($consultau);

    //Consulta a ejecutar ELIMINAR EL ESTADO RELACIONADO CON EL USUARIO
    $consultae = "DELETE FROM Estado WHERE Estado.id_status=".$id.";";        

    
    //Ejecutamos la consulta
    $conexion->query($consultae);

    //Borramo los archivos del usuario.
    array_map('unlink', glob("../../resources/profile-docs/identificacion".$id.".*"));
    array_map('unlink', glob("../../resources/profile-docs/recibo$id.*"));
    array_map('unlink', glob("../../resources/profile-img/img$id.*"));

    //Cerramos la conexión.
    $conexion->close();
?>