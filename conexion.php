<?php
    /**
     * Nombre: Judá Alector Vallejo Herrera
     * Descripción: Función para obtener la conexión a la base de datos.
     * Fecha: 11 de Mayo del 2018
     */
    function conectar(){        
        $user = "root";
        $password = "";
        $dbname = "pagobusonline";
        $host = "localhost";
        $conexion = new mysqli($host, $user, $password, $dbname) or die("Conexión fallida: ".pg_last_error());
        return $conexion;
    }

    /**
     * Nombre: Judá Alector Vallejo Herrera 
     * Descripción: Función que realiza un cast a utf8 (Recursivamente).
     * Fecha: 11 Mayo del 2018
     * @param {array} data, recibe un arreglo que contiene cada renglón de la petición.
     */
    function utf8ize($data) {
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $data[$k] = utf8ize($v);
            }
        } else if (is_string ($data)) {
            return utf8_encode($data);
        }
        return $data;
    }
?>