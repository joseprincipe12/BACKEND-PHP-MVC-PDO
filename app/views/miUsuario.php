<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>NuevoUsuario</title>
</head>

<body>
    <?php
		//Iniciando gestion de sesiones
		//Si NO existe una sesion iniciada
		if(!isset($_SESSION["user"]))
		{
			//Redireccionar al inicio
			require_once("controllers/inicioIndex.php");
			exit();
		}
	?>

	<form method="POST">
		<table>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="txtUsuario" value="<?php echo $_SESSION["user"] ?>" size="20"></td>
			</tr>

			<tr>
				<td>Nueva Clave</td>
				<td><input type="password" name="txtClaveNueva" value="" size="20"></td>
			</tr>

			<tr>
				<td>Repita Clave</td>
				<td><input type="password" name="txtClaveRepetida" value="" size="20"></td>
			

			<tr>
				<td><a href="<?php echo $GLOBALS['ruta_raiz']; ?>/inicio/index">Cancelar</a></td>
				<td><input type="submit" value="Guardar"></td>
			</tr>

		</table>

	</form>

</body>
</html>