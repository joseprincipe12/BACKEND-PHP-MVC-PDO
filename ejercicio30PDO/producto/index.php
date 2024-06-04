<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Producto</title>

	<script type="text/javascript">
		function confirmar(ruta)
		{
			//Mostrar un mensaje
			var rpta = confirm("Esta seguro de continuar?");
			//Segun la respuesta
			if(rpta)
			{
				//Direccionar a la ruta
				parent.location = ruta;
			}
		}
	</script>


</head>
<body>
	<h1>Gestion de Producto</h1>

	<a href="agregar.php">Agregar</a>
	
	<hr>

	<?php
		if(isset($_GET['txtDesBuscar']))
		{
			//Recoger el valor
			$descripcionBuscar = $_GET['txtDesBuscar'];

			//*** BASE DE DATOS ***
			//Incluir el archivo PHP de Conexion
			//require_once("C:/xampp/htdocs/303/ejercicio30/config/conexion.php"); //Ruta Absoluta
			require_once("../config/conexion.php"); //Ruta Relativa

			//Preparar la sentencia SQL (statement)
			$sentencia = $conexion->prepare("select * from producto where descripcion like concat('%',:descripcion,'%');");

			//Pasar el valor al parametro de la sentencia
			$sentencia->bindValue(":descripcion", $descripcionBuscar);

			//Ejecutar la sentencia
			$sentencia->execute();

			//Recoger las filas generadas en un ARRAY
			$tabla = $sentencia->fetchAll();

			//var_dump($tabla);
		}
		else
		{
			$descripcionBuscar = "";
			$tabla = array();
		}
	?>

	<form>
		<table>
			<tr>
				<td>Descripcion: </td>
				<td><input type="text" name="txtDesBuscar" value="<?php echo $descripcionBuscar ?>" /></td>
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
	foreach($tabla as $fila) 
	{
	?>

	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['descripcion']; ?></td>
		<td><?php echo $fila['categoria']; ?></td>
		<td><?php echo $fila['precio']; ?></td>

		<td><a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a></td>

		<td><a href='javascript:confirmar("eliminar.php?id=<?php echo $fila['id']; ?>")'>Eliminar</a></td>
		
	</tr>

	<?php
	}
	?>

	</table>

</body>
</html>

