<?php
	if(isset($_GET["id"]))
	{
		//***ELIMINAR REGISTRO***//
		//Recoger el valor del ID
		$id = $_GET['id'];

		//Incluir el archivo PHP de Conexion
		require_once("../config/conexion.php"); //Ruta Relativa

		//Preparar la sentencia SQL (statement)
		$sentencia = $conexion->prepare("delete from producto where id=:id;");

		//Pasar el valor al parametro de la sentencia
		$sentencia->bindValue(":id", $id);

		//Ejecutar la sentencia
		$sentencia->execute();

		//Mostrar un mensaje
		echo "<h1>Eliminando...</h1>";

		//Redireccionar la pagina
		header("refresh:1;url=index.php");
	}

?>