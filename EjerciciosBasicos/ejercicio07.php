<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 07</title>
</head>
<body>
	<h1>Array</h1>
	<p>En PHP los arrays (arreglos) son dinamicos: agregar y quitar elementos.</p>
	<p>Cada elemento puede contener un tipo de dato diferente.</p>
	<h2>Declarar</h2>
	<p>$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes");</p>
	<?php

		$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes");

		var_dump($dias);

	?>
	<h2>Mostrar Valores:</h2>
	<?php
		echo $dias[0] . "<br>";
		echo $dias[1] . "<br>";
		echo $dias[2] . "<br>";
		echo $dias[3] . "<br>";
		echo $dias[4] . "<br>";
	?>

	<h2>Mostrar Valores: FOR</h2>
	<?php
		for($indice=0;$indice<=(count($dias)-1);$indice=$indice+1)
		{
			echo $dias[$indice] . "<br>";
		}
	?>

	<h2>Mostrar Valores: FOREACH</h2>
	<?php
		foreach($dias as $elemento)
		{
			echo $elemento . "<br>";
		}
	?>

</body>
</html>