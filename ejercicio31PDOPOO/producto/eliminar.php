<?php
	if(isset($_GET["id"]))
	{
		//***ELIMINAR REGISTRO***//
		//Recoger el valor del ID que se eliminara
		$id = $_GET['id'];

		//Incluir el archivo PHP del Modelo Producto
		require_once("../models/producto.php"); //Ruta Relativa

		//Instanciar la clase Producto
		$objProducto = new Producto();			

		//Ejecutar el metodo Eliminar
		$objProducto->setEliminar($id);

		//Mostrar un mensaje
		echo "<h1>Eliminando...</h1>";

		//Redireccionar la pagina
		header("refresh:1;url=index.php");
	}

?>