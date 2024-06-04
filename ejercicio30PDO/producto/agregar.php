<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Producto - Agregar</title>
</head>
<body>
	<h1>Producto - Agregar</h1>

	<a href="agregar.php">Nuevo</a>

	<hr>

	<?php
		//Verificar si se envio el Form
		if(isset($_GET["txtId"]))
		{
			//Recoger los valores
			$id = $_GET["txtId"];
			$descripcion = $_GET["txtDescripcion"];
			$categoria = $_GET["txtCategoria"];
			$precio = $_GET["txtPrecio"];

			//Verificar si el ID=0
			if($id==0)
			{
				//*** INSERTAR UN NUEVO REGISTRO *** //

				//Incluir el archivo PHP de Conexion
				require_once("../config/conexion.php"); //Ruta Relativa

				//Preparar la sentencia SQL (statement)
				$sentencia = $conexion->prepare("insert into producto (descripcion, categoria, precio) values (:descripcion, :categoria, :precio);");

				//Pasar el valor al parametro de la sentencia
				$sentencia->bindValue(":descripcion", $descripcion);
				$sentencia->bindValue(":categoria", $categoria);
				$sentencia->bindValue(":precio", $precio);

				//Ejecutar la sentencia
				$sentencia->execute();

				//*** RECUPERAR EL NUEVO ID ***
				//Preparar la sentencia SQL (statement)
				$sentencia = $conexion->prepare("select max(id) as nuevoId from producto;");
				//Ejecutar la sentencia
				$sentencia->execute();
				//Recoger la fila
				$fila = $sentencia->fetch();
				//Leer el nuevo ID
				$id = $fila["nuevoId"];
			}
		}
		else
		{
			//Establecer valores iniciales
			$id = 0;
			$descripcion = "";
			$categoria = "";
			$precio = 0.0;

		}

		//$precio = (float) $precio;
		//var_dump($precio);
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