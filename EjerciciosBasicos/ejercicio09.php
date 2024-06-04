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
	<h2>Declarar Array Asociativo</h2>
	<p>
		$dias = array("dia1"=>"Lunes","dia2"=>"Martes","dia3"=>"Miercoles","dia4"=>"Jueves","dia5"=>"Viernes");
	</p>
	<?php

		$dias = array("dia1"=>"Lunes","dia2"=>"Martes","dia3"=>"Miercoles","dia4"=>"Jueves","dia5"=>"Viernes");

		var_dump($dias);

		echo "<br>";

		foreach ($dias as $elemento) 
		{
			echo $elemento . "<br>";
		}

		echo "<br>";

		foreach ($dias as $clave => $valor) 
		{
			echo $clave . " : " . $valor . "<br>";
		}

	?>

</body>
</html>