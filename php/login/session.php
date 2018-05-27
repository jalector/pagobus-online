<?php
/**
 * Nombre: Juda Alector Vallejo Herrera
 * Descripción: Funciones que inician, terminal a una sesión ademas
 *              de restrigir la entrada a otros usuarios.
 * Fecha: 25 de Mayo del 2018
 */

 
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Inicia una sessión con un usuario según se al tipo
     * Fecha: 25 de Marzo del 2018
     * @param $usuario {assoc_array}, recibe un array asociativo con
     *        los datos del usuario (id, nombre, correo, tipo).
     */
    function startSessionWith($usuario){
        echo session_start();        
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["nombre"] = $usuario["nombre"];
        $_SESSION["correo"] = $usuario["correo"];
        $_SESSION["tipo"] = $usuario["tipo"];

        switch($usuario["tipo"]){
            case 1: header("Location: ../../app/master/index.php"); break;
            case 2: header("Location: ../..//app/admin/index.php"); break;
            case 3: header("Location: ../..//app/usuario/index.php"); break;
            default: header("Location: /app/server-errors/no_login.html"); break;
        }
    }

    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Revizar sí un usario está accediendo a una 
     *              página permitida o a su tipo de usuario.
     * Fecha:  25 de Mayo del 2018
     * 
     */
    function checkPermission($type){
        $permission = 0;
        if(strpos($_SERVER["REQUEST_URI"], "app/admin/")){
            $permission = ($type == 2);
        }else if (strpos($_SERVER["REQUEST_URI"], "app/master/")){
            $permission = ($type == 1);
        }else if(strpos($_SERVER["REQUEST_URI"], "app/usuario/")){
            $permission = ($type == 3);
        }
        return $permission;
    }


?>