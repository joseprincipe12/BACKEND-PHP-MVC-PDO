<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 02</title>
	</head>
	<body>
		<h1>Variables PHP</h1>
		<p>Las variables en PHP son de tipado dinamico. 
			No se declaran. Se inicializan.</p>
		<?php 
			//Inicializar Variables
			$estudiante =  "JUAN PEREZ"; //string
			$edad = 20; //int
			$nota = 16.5; //float
			$aprobado = true; //boolean
			$fecha = date_create('2020-05-25'); //date
		?>
		
		<h2>Informacion de las Variables</h2>

		<p>$estudiante: <?php var_dump($estudiante); ?></p>

		<p>$edad: <?php var_dump($edad); ?></p>

		<p>$nota: <?php var_dump($nota); ?></p>

		<p> $aprobado: <?php var_dump($aprobado);?> </p>

		<p> $fecha: <?php var_dump($fecha); ?></p>

		<h2>Modificar los valores de las variables</h2>

		<?php 
			//Inicializar Variables
			$estudiante =  20;
			$edad = "JUAN PEREZ";
			$nota = true;
			$aprobado = 16.5;
			$fecha = date_create('2020-05-25'); //date
		?>

		<h2>Informacion de las Variables</h2>

		<p>$estudiante: <?php var_dump($estudiante); ?></p>

		<p>$edad: <?php var_dump($edad); ?></p>

		<p>$nota: <?php var_dump($nota); ?></p>

		<p> $aprobado: <?php var_dump($aprobado);?> </p>

		<p> $fecha: <?php var_dump($fecha); ?></p>

	</body>
</html>