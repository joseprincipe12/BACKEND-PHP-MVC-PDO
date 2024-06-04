<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Auto - Agregar</title>
</head>
<body>
	<h1>Auto - Agregar</h1>

	<a href="<?php echo $GLOBALS['ruta_raiz']; ?>/views/agregar">Nuevo</a>

	<form method="POST">
		<table>
			<tr>
				<td>Placa</td>
				<td><input type="text" name="txtPlaca" value="<?php echo $objAuto->placa; ?>" size="5"></td>
			</tr>

			<tr>
				<td>Marca</td>
				<td><input type="text" name="txtMarca" value="<?php echo $objAuto->marca; ?>" size="40"></td>
			</tr>

			<tr>
				<td>Propietario</td>
				<td><input type="text" name="txtPropietario" value="<?php echo $objAuto->propietario; ?>" size="20"></td>
			</tr>

			<tr>
				<td>Año</td>
				<td><input type="text" name="txtAnno" value="<?php echo $objAuto->anno; ?>" size="5"></td>
			</tr>

			<tr>
				<td><a href="<?php echo $GLOBALS['ruta_raiz']; ?>">Retornar</a></td>
				<td><input type="submit" value="Guardar"></td>
			</tr>

		</table>

	</form>

</body>
</html>