<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 05</title>
</head>
<body>
	<h1>Funciones Incorporadas</h1>
	<h2>Funciones Matematicas</h2>
	<?php
		$cateto1 = 3;
		$cateto2 = 4;

		$hipotenusa = sqrt(pow($cateto1,2) + pow($cateto2, 2));

		echo "<h4>El triangulo rectangulo de catetos $cateto1 y $cateto2 tiene la hipotenusa $hipotenusa</h4>";
	?>

	<?php
		$numero = 5;
		$raizCuadrada = sqrt($numero);
		$raizCuadrada = round($raizCuadrada,2);

		echo "<h4>La raiz cuadrada de $numero es $raizCuadrada</h4>"
	?>

	<h2>Funciones Texto</h2>

	<?php
		$nombre = "JULIO CESAR";

		$largo = strlen($nombre);
		echo "<h4>La longitud de $nombre es $largo </h4>";

		$cantidadPalabras = str_word_count($nombre);
		echo "<h4>La cantidad de palabras de $nombre es $cantidadPalabras </h4>";

		$posicion =  strpos($nombre,"CESAR");
		echo "<h4>La posicion de CESAR es $posicion </h4>";

		$extraccion = substr($nombre, $posicion, $largo);
		echo "<h4> $extraccion </h4>";

	?>
</body>
</html>