<?php
    function conectar(){        
            $user = "root";
            $password = "";
            $dbname = "pagobusonline";
            $host = "localhost";
            $conexion = new mysqli($host, $user, $password, $dbname) or die("Conexión fallida: ".pg_last_error());
            return $conexion;
        }
?>