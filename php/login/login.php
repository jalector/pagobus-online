<?php
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Archivo que valida los datos para login. Además de ello 
     *              hace levantamiento de sesiones.
     * Fecha: 22 de Mayo del 2018
     */

    //Nos permite conectar a base de datos.
    include "../conexion.php";
    $conexion = conectar();

    //Almacenamos los valore que se ocuparan para validar nuestra nueva entrada
    $correo = $_POST['correo'];
    $password = $_POST['contrasena'];
    $error = 1;

    $consulta = "select u.id_usuario as id, concat(u.nombre, ' ', u.apellido) as nombre, u.correo, (u.contrasena = '".$password."') as valid 
        from Usuario u where correo = '".$correo."';";

    $resultado = $conexion->query($consulta)->fetch_assoc();

    //Verificando sí estamos conectando con un usuario.
    if(isset($resultado)){
        if($resultado['valid']){
            $error = 0;
        }
    }else{
        $consulta = "select e.id_empleado as id, concat(e.nombre, ' ', e.apellido) as nombre, e.correo, (e.contrasena = '".$password."') as valid
            from Empleado e where correo = '".$correo."';";        
        $resultado = $conexion->query($consulta)->fetch_assoc();

        //Verificando sí estamos conectando con un empleado.
        if(isset($resultado)){            
            if($resultado["valid"]){
                $erro = 0;
            }
        }
    }

    function startSessionWith($usuario){
        session_start();
    }
    
    /*
        Obtener el correo en usuarios,
            SI:     saltar jump1
            NO:     buscar en Empleados
                SI: Saltar jump1
                NO: Error, saltaos jumpe
            jump1: comproblar la contraseña
                SI: Iniciamos sesión y mandamos según sea el login.
                NO: Error, saltamos jump
            jumpe: Usuario o contraseña invalidos. 
    */
?>
