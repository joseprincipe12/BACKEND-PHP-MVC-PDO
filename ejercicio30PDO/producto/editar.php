<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Producto - Editar</title>
</head>
<body>
	<h1>Producto - Editar</h1>

	<hr>

	<?php
		if(isset($_GET["id"]))
		{
			//*** MOSTRAR LOS DATOS ***//

			//Recoger el ID de la Fila enviada
			$id = $_GET["id"];
			//Incluir el archivo PHP de Conexion
			require_once("../config/conexion.php"); //Ruta Relativa

			//Preparar la sentencia SQL (statement)
			$sentencia = $conexion->prepare("select * from producto where id=:id;");

			//Pasar el valor al parametro de la sentencia
			$sentencia->bindValue(":id", $id);

			//Ejecutar la sentencia
			$sentencia->execute();

			//Recoger la fila
			$fila = $sentencia->fetch();
			//Leer los datos e la fila
			$id = $fila["id"];
			$descripcion = $fila["descripcion"];
			$categoria = $fila["categoria"];
			$precio = $fila["precio"];

		}
		else if(isset($_GET['txtId']))
		{
			//*** ACTUALIZAR LOS DATOS ***//

			//Recoger los valores (cajas de texto) enviado por el formulario
			$id = $_GET["txtId"];
			$descripcion = $_GET["txtDescripcion"];
			$categoria = $_GET["txtCategoria"];
			$precio = $_GET["txtPrecio"];

			//Incluir el archivo PHP de Conexion
			require_once("../config/conexion.php"); //Ruta Relativa

			//Preparar la sentencia SQL (statement)
			$sentencia = $conexion->prepare("update producto set descripcion=:descripcion, categoria=:categoria, precio=:precio where id=:id;");

			//Pasar el valor al parametro de la sentencia
			$sentencia->bindValue(":descripcion", $descripcion);
			$sentencia->bindValue(":categoria", $categoria);
			$sentencia->bindValue(":precio", $precio);
			$sentencia->bindValue(":id", $id);

			//Ejecutar la sentencia
			$sentencia->execute();

		}
		else
		{
			$id = 0;
			$descripcion = "";
			$categoria = "";
			$precio = 0.0;
		}
	?>

	<form>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="txtId" value="<?php echo $id; ?>" readonly size="5"></td>
			</tr>

			<tr>
				<td>Descripcion</td>
				<td><input type="text" name="txtDescripcion" value="<?php echo $descripcion; ?>" size="40"></td>
			</tr>

			<tr>
				<td>Categoria</td>
				<td><input type="text" name="txtCategoria" value="<?php echo $categoria; ?>" size="20"></td>
			</tr>

			<tr>
				<td>Precio S/.</td>
				<td><input type="text" name="txtPrecio" value="<?php echo $precio; ?>" size="5"></td>
			</tr>

			<tr>
				<td><a href="index.php">Retornar</a></td>
				<td><input type="submit" value="Guardar"></td>
			</tr>

		</table>

	</form>

</body>
</html>