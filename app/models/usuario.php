<?php

    //Incluir el archivo PHP de Conexion
    require_once("conexion.php"); //Ruta Relativa

    //Declarar la clase Usuario

    class Usuario{

        //propiedades;
        public $usuario;
        public $clave;
        public $nombre;
        public $apellido;
        public $correo;

        //metodos
        public function getUsuarioClave($usuario){
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("SELECT usuario, cast(AES_DECRYPT(clave, 'key1234') AS char(100)) as clave FROM usuarios where usuario = :usuario;");
            
            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario", $usuario);

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger la fila
            $tabla = $sentencia->fetch();

            //Retornar
            return $tabla;
        }

        public function setRegistrarUsuario($objUsuario){
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("insert into usuarios(usuario, clave, nombre, apellido, correo)
            values(:usuario, aes_encrypt(:clave,'key1234'), :nombre, :apellido, :correo);");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario", $objUsuario->usuario);
            $sentencia->bindValue(":clave", $objUsuario->clave);
            $sentencia->bindValue(":nombre", $objUsuario->nombre);
            $sentencia->bindValue(":apellido", $objUsuario->apellido);
            $sentencia->bindValue(":correo", $objUsuario->correo);

            $nuevoUsuario = $objUsuario->usuario;

            //Ejecutar la sentencia
            $sentencia->execute();

            return $nuevoUsuario;
        }

        public function setExistencia($usuario){

            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("SELECT CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END AS existe_usuario
            FROM usuarios
            WHERE usuario = :usuario;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario",$usuario);

            //Ejecutar la sentencia
            $sentencia->execute();

            // Fetch the result
            $verificacion = $sentencia->fetchColumn();

            // Now $verificacion contains either 0 or 1
            return $verificacion;
        }
        
        public function setCambioClave($usuario,$clave){

            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("UPDATE usuarios SET clave = AES_ENCRYPT(:clave, 'key1234') WHERE usuario = :usuario; ");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":usuario",$usuario);
            $sentencia->bindValue(":clave",$clave);

            //Ejecutar la sentencia
            $sentencia->execute();
        }
    }
?>