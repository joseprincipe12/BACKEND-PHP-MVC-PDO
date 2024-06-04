<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 03</title>
</head>
<body>
	<h1>Estructura de Control</h1>
	<h2>IF - ELSE</h2>
	<?php
		//Inicializar la variable
		$edad = 10;

		//Establecer el control
		if($edad>=18)
		{
			$estado = "Mayor";
		}else
		{
			$estado = "Menor";
		}

		//Mostrar resultados
		echo "<h3>La persona de $edad años, es $estado de edad</h3>";

	?>
	<h2>IF - ELSEIF</h2>
	<?php
		//Establecer la nota
		$nota = 19;

		//Controlando
		if($nota>=18)
		{
			$calificacion = "Excelente";
		}
		elseif($nota>=16)
		{
			$calificacion = "Muy bueno";
		}
		elseif($nota>=14) 
		{
			$calificacion = "Bueno";
		}
		elseif($nota>=11)
		{
			$calificacion = "Regular";
		}else
		{
			$calificacion = "En progreso";
		}

		//Mostrar
		echo "<h3>El estudiante con nota $nota es $calificacion </h3>";
	?>

	<h2>TERNARIO (condicion) ? verdadero : falso </h2>
	<?php
		//Asignar edad
		$edad = 25;
		//Ternario
		$estado = ($edad>=18)?"MAYOR":"MENOR";
		//Mostrar resultados
		echo "<h3>La persona de $edad años, es $estado de edad</h3>";

	?>
</body>
</html>
