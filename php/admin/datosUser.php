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
    $id = $_GET['id'];

    //Consulta a ejecutar
    $consulta = "SELECT u.nombre, u.apellido, u.f_nacimiento as fecha, u.colonia, u.domicilio, e.tipo_estado as estado
    FROM usuario u JOIN estado e ON u.id_Status = e.id_status
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
        $respuesta[] = array("nombre" => 'no data', "apellido" => 'no data', "fecha" => 'no data', "colonia" => 'no data', "domicilio" => 'no data', "estado" => 'no data');
    }
//Cerramos la conexión.
$conexion->close();
//Devolvemos la respuesta.
echo json_encode(utf8ize($respuesta));
?>