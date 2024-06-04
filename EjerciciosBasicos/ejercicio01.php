<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 01</title>
	</head>
	<body>
		<h1>Ejercicio 01</h1>
		
		<h2>Parrafo 1</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<!-- INICIO DE CODIGO PHP -->

		<?php
			$usuario = "Marco Gonzales";
			echo "<h2>" . $usuario . "</h2>";
			echo "<h2> $usuario </h2>";
		?>

		<!-- FIN DE CODIGO PHP -->

		<h2>Parrafo 2</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<!-- INICIO DE CODIGO PHP -->

		<?php
			echo "<h1>Bienvenido " . $usuario . "</h1>";
			echo "<h1>Bienvenido $usuario </h1>";
		?>
		<h1>Bienvenido <?php echo $usuario; ?></h1>
		<!-- FIN DE CODIGO PHP -->

	</body>
</html>