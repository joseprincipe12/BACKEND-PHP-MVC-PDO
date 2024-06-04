<h1>Producto - Eliminar</h1>
<hr>
<form method="post">
	<table>
		<tr>
			<td>Id</td>
			<td><input type="text" name="txtId" value="<?php echo $objProducto->id; ?>" readonly size="5"></td>
		</tr>

		<tr>
			<td>Descripcion</td>
			<td><input type="text" name="txtDescripcion" value="<?php echo $objProducto->descripcion; ?>" disabled size="40"></td>
		</tr>

		<tr>
			<td>Categoria</td>
			<td><input type="text" name="txtCategoria" value="<?php echo $objProducto->categoria; ?>" disabled size="20"></td>
		</tr>

		<tr>
			<td>Precio S/.</td>
			<td><input type="text" name="txtPrecio" value="<?php echo $objProducto->precio; ?>" disabled size="5"></td>
		</tr>

		<tr>
			<td>
				<a href="<?php echo $GLOBALS['ruta_raiz']; ?>/producto">Retornar</a>
			</td>
			<td><input type="submit" value="Eliminar"></td>
		</tr>

	</table>

</form>