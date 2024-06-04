<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<h1>Iniciar Sesion</h1>

	<?php

		//Iniciar la gestion de sesiones
		session_start();

		//Si existe una sesion
		if(isset($_SESSION["usuario"]))
		{
			//Redireccionar al inicio
			header("location: inicio.php");
			exit();
		}


		//Verificar si se envio el Formulario
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			//Inicializar el usuario y la clave que vendria de la BD
			$usuarioBD = "admin";
			$claveBD = "123";

			//Recoger los valores enviados por el formulario
			$usuario = $_POST['txtUsuario'];
			$clave = $_POST['txtClave'];

			//Verificar si el usuario y clave son correctas
			if(($usuario==$usuarioBD)&&($clave==$claveBD))
			{
				//Crear la variable de sesion
				$_SESSION['usuario'] = $usuario;
				//Redireccionar al inicio
				header("location: inicio.php");
				exit();
			}
		}
	?>
	<form method="post">
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="txtUsuario"> </td>
			</tr>
			<tr>
				<td>Clave:</td>
				<td><input type="password" name="txtClave"> </td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Iniciar"></td>
			</tr>

		</table>
	</form>
</body>
</html>