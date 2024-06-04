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
		//Incluir el archivo PHP del Modelo Producto
		require_once("../models/producto.php"); //Ruta Relativa

		//Instanciar la clase Producto
		$objProducto = new Producto();


		//Verificar si se envio el Form
		if(isset($_GET["txtId"]))
		{
			//Recoger los valores
			$objProducto->id = $_GET["txtId"];
			$objProducto->descripcion = $_GET["txtDescripcion"];
			$objProducto->categoria = $_GET["txtCategoria"];
			$objProducto->precio = $_GET["txtPrecio"];

			//Verificar si el ID=0 para insertar
			if($objProducto->id==0)
			{
				//Insertar el nuevo producto
				//y Recoger el nuevo ID
				$objProducto->id = $objProducto->setInsertar($objProducto);
			}
		}
		else
		{
			//Establecer valores iniciales
			$objProducto->id = 0;
			$objProducto->descripcion = "";
			$objProducto->categoria = "";
			$objProducto->precio = 0.0;

		}

	?>

	<form>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="txtId" value="<?php echo $objProducto->id; ?>" readonly size="5"></td>
			</tr>

			<tr>
				<td>Descripcion</td>
				<td><input type="text" name="txtDescripcion" value="<?php echo $objProducto->descripcion; ?>" size="40"></td>
			</tr>

			<tr>
				<td>Categoria</td>
				<td><input type="text" name="txtCategoria" value="<?php echo $objProducto->categoria; ?>" size="20"></td>
			</tr>

			<tr>
				<td>Precio S/.</td>
				<td><input type="text" name="txtPrecio" value="<?php echo $objProducto->precio; ?>" size="5"></td>
			</tr>

			<tr>
				<td><a href="index.php">Retornar</a></td>
				<td><input type="submit" value="Guardar"></td>
			</tr>

		</table>

	</form>

</body>
</html>