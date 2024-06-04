<?php
	//Variables parametros del PDO
	$cadena = "mysql:host=127.0.0.1; dbname=BDPIAD303";
	$usuario = "root";
	$clave = "";

	//Instanciar un nuevo objeto PDO
	$conexion = new PDO($cadena,$usuario,$clave);

	//Preparar la sentencia SQL (statement)
	$sentencia = $conexion->prepare("select distinct categoria from producto;");

	//Ejecutar la sentencia
	$sentencia->execute();

	//Recoger las filas generadas en un ARRAY
	$tabla = $sentencia->fetchAll();

	foreach ($tabla as $fila) 
	{
		echo "<option>" . $fila["categoria"] ."</option>";
	}
?>