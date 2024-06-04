<?php

//Incluir el archivo PHP de Conexion
require_once("../config/conexion.php"); //Ruta Relativa

//Declarar la clase producto
class Producto
{
	//Propiedades
	public $id;
	public $descripcion;
	public $categoria;
	public $precio;

	//Metodos : CRUD
	public function getBuscarById($idBuscar)
	{
		//Crear conexion a la BD
		//Ejecutar el metodo estatico
		$conexion =  Conexion::getConectarMySQL();

		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("select * from producto where id=:id;");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":id", $idBuscar);

		//Ejecutar la sentencia
		$sentencia->execute();

		//Recoger la fila
		$fila = $sentencia->fetch();

		//Leer los datos de la fila en la misma clase
		$this->id = $fila["id"];
		$this->descripcion = $fila["descripcion"];
		$this->categoria = $fila["categoria"];
		$this->precio = $fila["precio"];

		//Retornar
		return $this;
	}

	public function getBuscarByDescripcion($descripcionBuscar)
	{
		//Crear conexion a la BD
		//Ejecutar el metodo estatico
		$conexion =  Conexion::getConectarMySQL();

		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("select * from producto where descripcion like concat('%',:descripcion,'%');");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":descripcion", $descripcionBuscar);

		//Ejecutar la sentencia
		$sentencia->execute();

		//Recoger las filas generadas en un ARRAY
		$tabla = $sentencia->fetchAll();

		//Retornar la Tabla de datos
		return $tabla;
	}

	public function setInsertar($objProducto)
	{
		//Crear conexion a la BD
		//Ejecutar el metodo estatico
		$conexion =  Conexion::getConectarMySQL();

		//*** INSERTAR UN NUEVO REGISTRO *** //
		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("insert into producto (descripcion, categoria, precio) values (:descripcion, :categoria, :precio);");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":descripcion", $objProducto->descripcion);
		$sentencia->bindValue(":categoria", $objProducto->categoria);
		$sentencia->bindValue(":precio", $objProducto->precio);

		//Ejecutar la sentencia
		$sentencia->execute();

		//*** RECUPERAR EL NUEVO ID ***
		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("select max(id) as nuevoId from producto;");
		//Ejecutar la sentencia
		$sentencia->execute();
		//Recoger la fila
		$fila = $sentencia->fetch();
		//Leer el nuevo ID
		$nuevoId = $fila["nuevoId"];

		//Retornar el nuevo ID
		return $nuevoId;
	}

	public function setActualizar($objProducto)
	{
		//Crear conexion a la BD
		//Ejecutar el metodo estatico
		$conexion =  Conexion::getConectarMySQL();

		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("update producto set descripcion=:descripcion, categoria=:categoria, precio=:precio where id=:id;");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":descripcion", $objProducto->descripcion);
		$sentencia->bindValue(":categoria", $objProducto->categoria);
		$sentencia->bindValue(":precio", $objProducto->precio);
		$sentencia->bindValue(":id", $objProducto->id);

		//Ejecutar la sentencia
		$sentencia->execute();
	}

	public function setEliminar($idEliminar)
	{
		//Crear conexion a la BD
		//Ejecutar el metodo estatico
		$conexion =  Conexion::getConectarMySQL();

		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("delete from producto where id=:id;");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":id", $idEliminar);

		//Ejecutar la sentencia
		$sentencia->execute();
		
	}

}


?>