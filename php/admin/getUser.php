<?php
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Archivo que manda información de bases de datos acerca de los Usuarios
     * Fecha: 11 de Mayo del 2018
     */

    include '../conexion.php';
    //Nos conectamos a bases de datos.
    $conexion = conectar();
    //Obtenemos los datos de la peticíon
    $value = "";
    $type = "";
    if(isset($_POST['value'])){
        $value = $_POST['value'];
    }
    if(isset($_POST['type'])){
        $type = $_POST['type'];
    }
    //Consulta a ejecutar
    $consulta = "select * from (select u.id_usuario as id, concat(u.nombre, ' ', u.apellido) as nombre, u.correo, e.tipo_estado as estado from Usuario u join Estado e on u.id_status = e.id_Status) c ";
    //Se evalua el tipo de busquedas
    if($value != ""){
        switch($type){
            case "id":      $consulta .= "where c.id = ". $value . ";"; break;
            case "nombre":  $consulta .= "where c.nombre like '%".$value."%';"; break;
            case "correo":  $consulta .= "where c.correo = '".$value."';"; break;
            case "estado":  $consulta .= "where c.estado = '".$value."';"; break;
        }
    }
    $resultado = $conexion->query($consulta);
    $respuesta = array();
    //El resultado es ahora transformado a un arreglo
    if ($resultado->num_rows > 0) {
        while($renglon = $resultado->fetch_assoc()) {
            $respuesta[] = $renglon;
        }
    }else{
        //Respuesta sí la consuta regresó sin nada.
        $respuesta[] = array("id" => '0', "nombre" => 'no data', "correo" => 'nodata@nodata', "estado" => 'nodata');
    }
    //Devolvemos la respuesta.
    echo json_encode(utf8ize($respuesta));
    //Cerramos la conexión.
    $conexion->close();
?>