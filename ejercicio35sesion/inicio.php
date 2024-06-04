<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
</head>
<body>
	<?php
		//Iniciando gestion de sesiones
		session_start();
		//Si NO existe una sesion iniciada
		if(!isset($_SESSION["usuario"]))
		{
			//Redireccionar al inicio
			header("location: index.php");
			exit();
		}


	?>


	<h1>Pagina Principal</h1>
	
	<h2>Bienvenido <?php echo $_SESSION["usuario"] ?></h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<a href="cerrar.php">Cerrar sesion</a>

</body>
</html>