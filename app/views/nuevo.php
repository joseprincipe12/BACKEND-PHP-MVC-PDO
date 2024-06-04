<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>NuevoUsuario</title>
</head>
<body>
	<h1>Registro de Usuario</h1>

	<form method="POST">
		<table>
			<tr>
				<td>Usuario</td>
				<td><input type="text" name="txtUsuario" value="<?php echo $objUsario->usuario;?>" size="20"></td>
			</tr>

			<tr>
				<td>Nueva Clave</td>
				<td><input type="password" name="txtClave" value="<?php echo $objUsario->clave;?>" size="20"></td>
			</tr>

			<tr>
				<td>Repita Clave</td>
				<td><input type="password" name="txtClaveRepetiva" value="<?php echo $claveRepetida;?>" size="20"></td>
			</tr>

			<tr>
				<td>Nombre</td>
				<td><input type="text" name="txtNombre" value="<?php echo $objUsario->nombre;?>" size="20"></td>
			</tr>

            <tr>
				<td>Apellido</td>
				<td><input type="text" name="txtApellido" value="<?php echo $objUsario->apellido;?>" size="20"></td>
			</tr>

            <tr>
				<td>e-mail</td>
				<td><input type="email" name="txtEmail" value="<?php echo $objUsario->correo;?>" size="20"></td>
			</tr>

			<tr>
				<td><a href="<?php echo $GLOBALS['ruta_raiz']; ?>">Cancelar</a></td>
				<td><input type="submit" value="Registrar"></td>
			</tr>

		</table>

	</form>

</body>
</html>