<?php

    class Conexion{

        public static function getConectarMySQL(){

            $cadena = "mysql:host=localhost:3307; dbname=AUTO";
            $usuario = "root";
            $clave = "";

            $conexion = new PDO($cadena, $usuario, $clave);

            return $conexion;

        }
    }

?>