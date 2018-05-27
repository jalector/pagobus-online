<?php
    /**
     * Nombre: Angel Hernández Rivera
     * Descripción: Archivo que actualiza un usuario en la BD
     * Fecha: 25 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $id = $_GET['id'];

    //Consulta a ejecutar
    $consulta = "SELECT contrasena,nombre,apellido,f_nacimiento,colonia,domicilio,correo FROM Usuario WHERE id_usuario =".$id.";";

    $resultado = $conexion->query($consulta);
    $respuesta = array();
    //El resultado es ahora transformado a un arreglo
    if ($resultado->num_rows > 0) {
        while($renglon = $resultado->fetch_assoc()) {
            $respuesta[] = $renglon;
        }
    }else{
        //Respuesta sí la consuta regresó sin nada.
        $respuesta[] = array("contrasena" => 'no data', "nombre" => 'no data', "apellido" => 'no data', "f_nacimiento" => 'no data', "colonia" => 'no data', "domicilio" => 'no data',"correo" => 'nodata@nodata');
    }
//Cerramos la conexión.
$conexion->close();
//Devolvemos la respuesta.
echo json_encode(utf8ize($respuesta));
?>