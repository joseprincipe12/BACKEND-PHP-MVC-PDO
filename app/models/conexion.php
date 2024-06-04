<?php
    //Creamos la clase conexion 
    class Conexion{

        //Creamos la funcion publica y statica 
        public static function getConectarMySQL(){

            //Creamos variables a usar en el PDO
            $cadena = "mysql:host=localhost:3307; dbname=APPUSUARIO";
            $usuario = "root";
            $clave = "";

            //Realizamos la conexion y los guardamos en una variable
            $conexion = new PDO($cadena, $usuario, $clave);

            //Retornamos conexion
            return $conexion;

        }
    }

?>