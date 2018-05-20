<?php
    include "../conexion.php";
    $conexion = conectar();
    $id =  $_POST["input-id"];

/***************************** Peticiones a base de datos *****************************/    
    $consulta = "update Usuario set ".
                    "nombre = '". $_POST["input-nombre"]."',  ".
                    "apellido = '". $_POST["input-apellido"]."', ".
                    "f_nacimiento = '". $_POST["input-fechan"]."', ".
                    "fotografia = '". $id.".jpg', ".
                    "colonia = '". $_POST["input-colonia"]."', ".
                    "domicilio = '". $_POST["input-domicilio"]."', ".
                    "correo = '". $_POST["input-mail"]."' ".
                    "where id_Usuario = '". $id."';";

    $conexion->query($consulta);

    $filePath['recibo'] = "recibo".$id.".". pathinfo($_FILES["input-recibo"]['name'], PATHINFO_EXTENSION);
    $filePath['identifiacion'] = "identificacion".$id.".". pathinfo($_FILES["input-identificacion"]['name'], PATHINFO_EXTENSION);    

    if(exist($id, $conexion)){
        $consulta2 = "update Documento set documento = '". json_encode($filePath)."', f_actualizacion = curdate(), estado ='pendiente' where id_usuario = '".$id."';";
    }else{
        $consulta2 = "insert into Documento values (null, '".  json_encode($filePath). "' , curdate(), 'pendiente',". $id.");";
    }

    $conexion->query($consulta2);
    
    $conexion->close();
/************************** Acciones para subir archivos *****************************/
    upload($_FILES["input-foto"], "../../resources/profile-img/img",$id.".jpg");
    upload($_FILES["input-recibo"], "../../resources/profile-docs/",$filePath['recibo']);
    upload($_FILES["input-identificacion"], "../../resources/profile-docs/",$filePath['identifiacion']);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
/************************************ Funciones  *************************************/

    
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descrición: Revisar sí un registro en la tabla Documento existe.
     * Fecha: 20 de mayo del 2018
     * @param {}
     */
    function exist($idUser, $conexion){
        $r = $conexion->query("select count(*) as id from Documento where id_usuario = '". $idUser . "'");
        $dato = $r->fetch_assoc();
        return ($dato['id']);
    }

    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Sube los archivos a una ubicación del servidor.
     * Feccha
     */
    function upload($file, $location, $name){
        move_uploaded_file($file["tmp_name"], $location.$name);
    }
                    
                    
?>