<?php
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Archivo que manda información de bases de datos acerca de los Archivos
     * relacionados con un unico usuario
     * Fecha: 19 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $id = $_POST['id'];
    //Consulta a ejecutar
    $consulta = "
    SELECT d.id_Documento as id, d.documento as documento, d.f_actualizacion as fecha, d.estado
    FROM usuario u JOIN documento d on u.id_usuario = d.id_usuario
    WHERE u.id_usuario = ".$id.";";
    
    $resultado = $conexion->query($consulta);
    $respuesta = array();
    //El resultado es ahora transformado a un arreglo
    if ($resultado->num_rows > 0) {
        while($renglon = $resultado->fetch_assoc()) {
            $respuesta[] = $renglon;
        }
    }else{
        //Respuesta sí la consuta regresó sin nada.
        $respuesta[] = array("id" => '0', "documento" => 'no data',"fecha" => 'no date', "estado" => 'no data');
    }
    //Cerramos la conexión.
    $conexion->close();
    //Devolvemos la respuesta.
    echo json_encode(utf8ize($respuesta));
?>  