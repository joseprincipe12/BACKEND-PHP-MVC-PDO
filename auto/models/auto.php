<?php

    //Incluir el archivo PHP de Conexion
    require_once("conexion.php"); //Ruta Relativa

    //Declarar la clase producto
    class Auto{

        //Propiedades
        public $placa;
        public $marca;
        public $propietario;
        public $anno;

        public function getBuscarByPlaca($placa){

            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("select * from Auto where placa=:placa;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":placa", $placa);

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger la fila
            $fila = $sentencia->fetch();

            //Leer los datos de la fila en la misma clase
            $this->placa = $fila["placa"];
            $this->marca = $fila["marca"];
            $this->propietario = $fila["propietario"];
            $this->anno = $fila["anno"];

            //Retornar
            return $this;

        }

        public function getBuscarByMarca($marca){

            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("select * from Auto where marca like :marca;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":marca", $marca);

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger las filas generadas en un ARRAY
            $tabla = $sentencia->fetchAll();

            //Retornar la Tabla de datos
            return $tabla;

        }

        public function getDatos(){

            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("select distinct marca from Auto;");

            //Ejecutar la sentencia
            $sentencia->execute();

            //Recoger las filas generadas en un ARRAY
            $tabla = $sentencia->fetchAll();

            //Retornar la Tabla de datos
            return $tabla;

        }

        public function setInsertar($objAuto){
            
            $conexion = Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
			$sentencia = $conexion->prepare("insert into Auto (placa, marca, propietario, anno) values (:placa, :marca, :propietario, :anno);");

			//Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":placa", $objAuto->placa);
			$sentencia->bindValue(":marca", $objAuto->marca);
			$sentencia->bindValue(":propietario", $objAuto->propietario);
			$sentencia->bindValue(":anno", $objAuto->anno);

            $nuevoId = $objAuto->placa;

			//Ejecutar la sentencia
			$sentencia->execute();


            //Retornar el Nuevo ID
            return $nuevoId;
        }

        public function setActualizar($objAuto)
	    {
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("update Auto set marca=:marca, propietario=:propietario, anno=:anno  where placa=:placa;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":marca", $objAuto->marca);
            $sentencia->bindValue(":propietario", $objAuto->propietario);
            $sentencia->bindValue(":anno", $objAuto->anno);
            $sentencia->bindValue(":placa", $objAuto->placa);

            //Ejecutar la sentencia
            $sentencia->execute();
	    }
        
        public function setEliminar($placaEliminar)
        {
            //Crear conexion a la BD
            //Ejecutar el metodo estatico
            $conexion =  Conexion::getConectarMySQL();

            //Preparar la sentencia SQL (statement)
            $sentencia = $conexion->prepare("delete from Auto where placa=:placa;");

            //Pasar el valor al parametro de la sentencia
            $sentencia->bindValue(":placa", $placaEliminar);

            //Ejecutar la sentencia
            $sentencia->execute();
            
        }
    }

?>