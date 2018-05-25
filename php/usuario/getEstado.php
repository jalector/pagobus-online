<?php
    /**
     * Nombre: Angel Hernández Rivera
     * Descripción: Archivo que manda información de bases de datos acerca de los Usuarios
     * Fecha: 22 de Mayo del 2018
     */
    include '../../php/conexion.php';
    $conexion = conectar();
   // $id =  $_POST["input-id"];

    /***************************** Peticiones a base de datos *****************************/    
    $consulta = "select nombre,apellido,f_nacimiento,correo,domicilio,colonia,tipo_estado from usuario u JOIN estado e on u.id_status=e.id_status WHERE id_usuario=2";

//Ejecuto la consulta y la guardo en resultado
     $resultado = $conexion->query($consulta);
//Guardo la consulta en un arreglo $renglon e imprimo los datos de cada posicion del arreglo en el archivo html con sus respectivos estilos
        while($renglon = $resultado->fetch_assoc()) {
          printf("<div class='form-group'>
            <label class='label offset-md-1'><b>Nombre(s): </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Apellido(s): </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Fecha de nacimiento: </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Email: </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Domicilio: </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Colonia: </b>%s</label></div>
            <div class='form-group'>
            <label class='label offset-md-1'><b>Estado de la solicitud: </b>%s</label></div>",utf8ize($renglon["nombre"]),
            utf8ize($renglon["apellido"]),utf8ize($renglon["f_nacimiento"]),utf8ize($renglon["correo"]),utf8ize($renglon["domicilio"]),utf8ize($renglon["colonia"]),utf8ize($renglon["tipo_estado"]));
        }

          //Cerramos la conexión.
          $conexion->close();
          ?>