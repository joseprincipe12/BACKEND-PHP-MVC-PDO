<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Array</h1>
	<p>En PHP los arrays (arreglos) son dinamicos: agregar y quitar elementos.</p>
	<p>Cada elemento puede contener un tipo de dato diferente.</p>
	<h2>Declarar SIN elementos</h2>
	<p>$dias = array();</p>
	<?php

		$dias = array();

		var_dump($dias);
	?>
	<h2>Agregar Elementos</h2>
	<?php
		//Agregar 
		$dias[] = "Lunes";
		$dias[] = "Martes";
		$dias[] = "Miercoles";
		$dias[] = "Jueves";
		$dias[] = "Viernes";

		var_dump($dias);

		echo "<br>";

		for($indice=0;$indice<=(count($dias)-1);$indice=$indice+1)
		{
			echo $dias[$indice] . "<br>";
		}
	?>

	<h2>Eliminar Elementos</h2>
	<?php
		//Eliminar
		unset($dias[2]);

		var_dump($dias);

		echo "<h3>For</h3>";
		for($indice=0;$indice<=(count($dias)-1);$indice=$indice+1)
		{
			echo $dias[$indice] . "<br>";
		}

		echo "<h3>For Each</h3>";
		foreach($dias as $elemento)
		{
			echo $elemento . "<br>";
		}	
	?>


</body>
</html>