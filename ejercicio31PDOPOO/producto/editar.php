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

		//Incluir el archivo PHP del Modelo Producto
		require_once("../models/producto.php"); //Ruta Relativa

		//Instanciar la clase Producto
		$objProducto = new Producto();	

		//Verificar si se ha enviado el ID a buscar
		if(isset($_GET["id"]))
		{
			//*** MOSTRAR LOS DATOS ***//

			//Recoger el ID de la Fila enviada
			$id = $_GET["id"];

			//Ejecutar la busqueda por ID
			//y recoger el objeto producto encontrado
			$objProducto = $objProducto->getBuscarById($id);

		}
		//Verificar si se ha enviado el Formulario con los datos a actualizar
		else if(isset($_GET['txtId']))
		{
			//*** ACTUALIZAR LOS DATOS ***//

			//Recoger los valores (cajas de texto) enviado por el formulario
			$objProducto->id = $_GET["txtId"];
			$objProducto->descripcion = $_GET["txtDescripcion"];
			$objProducto->categoria = $_GET["txtCategoria"];
			$objProducto->precio = $_GET["txtPrecio"];

			//Ejecutar el metodo de actualizacion
			$objProducto->setActualizar($objProducto);

		}
		else
		{
			//Asignar los valores predeterminados
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