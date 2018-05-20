<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que manda información de bases de datos acerca de los Archivos
     * Fecha: 18 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $estado = $_POST['estado'];
    //Consulta a ejecutar
    $consulta = "
    select u.id_usuario as id, d.documento as documento, concat(u.nombre, ' ', u.apellido)as nombre, d.estado as estado
    from usuario u JOIN documento d ON u.id_usuario = d.id_usuario 
    WHERE d.estado = '".$estado."';";
    
    $resultado = $conexion->query($consulta);
    $respuesta = array();
    //El resultado es ahora transformado a un arreglo
    if ($resultado->num_rows > 0) {
        while($renglon = $resultado->fetch_assoc()) {
            $respuesta[] = $renglon;
        }
    }else{
        //Respuesta sí la consuta regresó sin nada.
        $respuesta[] = array("id" => '0', "documento" => 'no data', "nombre" => 'no data', "estado" => 'no data');
    }
    //Cerramos la conexión.
    $conexion->close();
    //Devolvemos la respuesta.
    echo json_encode(utf8ize($respuesta));
?>