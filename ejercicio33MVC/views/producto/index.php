<!-- BODY DE LA VISTA -->
<h1>Gestion de Producto</h1>

<a href="producto/agregar">Agregar</a>

<hr>

<form method="post">
	<table>
		<tr>
			<td>Descripcion: </td>
			<td><input type="text" name="txtDescripcionBuscar" value="<?php echo $descripcionBuscar ?>" /></td>
			<td><input type="submit" value="Buscar" /></td>
		</tr>
	</table>
</form>

<hr>

<table border="1">
	<tr>
		<th>CODIGO</th>
		<th>DESCRIPCION</th>
		<th>CATEGORIA</th>
		<th>PRECIO S/.</th>
	</tr>

<?php
	//Inicio del ForEach
	//Utilizando $tabla que viene del controlador
	foreach ($tabla as $fila) 
	{

?>


<tr>
	<td><?php echo $fila['id']; ?></td>
	<td><?php echo $fila['descripcion']; ?></td>
	<td><?php echo $fila['categoria']; ?></td>
	<td><?php echo $fila['precio']; ?></td>

	<td><a href='producto/editar?idEditar=<?php echo $fila['id']; ?>'>Editar</a></td>

	<td><a href='producto/eliminar?idEliminar=<?php echo $fila['id']; ?>'>Eliminar</a></td>
	
</tr>

<?php
	
	}
	//Fin del ForEach
?>


</table>