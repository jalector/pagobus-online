<?php
    include '../conexion.php';

    $conexion = conectar();
    $consulta = "select u.id_usuario, concat(u.nombre, ' ', u.apellido) as nombre, u.correo, e.tipo_estado from usuario u join estado e on u.id_status = e.id_Status;";
    $resultado = $conexion->query($consulta);
    $respuesta = array();
    if ($resultado->num_rows > 0) {
        while($renglon = $resultado->fetch_assoc()) {
            $respuesta[] = $renglon;
        }
    }
    $conexion->close();

    function utf8ize($d) {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }

    echo json_encode(utf8ize($respuesta));
    

?>