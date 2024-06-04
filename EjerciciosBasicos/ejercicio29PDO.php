<?php

//Variables parametros del PDO
$cadena = "mysql:host=127.0.0.1; dbname=BDPIAD303";
$usuario = "root";
$clave = "";


//Instanciar un nuevo objeto PDO
$conexion = new PDO($cadena,$usuario,$clave);

echo "Conexion OK! <br>";

//Preparar la sentencia SQL (statement)
$sentencia = $conexion->prepare("select * from producto where categoria=:categoria;");

//Pasar el valor al parametro de la sentencia
$sentencia->bindValue(":categoria","BEBIDAS");

//Ejecutar la sentencia
$sentencia->execute();

//Recoger las filas generadas en un ARRAY
$tabla = $sentencia->fetchAll();


// -- var_dump($tabla);

foreach($tabla as $fila) 
{
	echo "<div>".$fila['id']."-".$fila['descripcion']."-".$fila['categoria']."-".$fila['precio']."</div>";
}

?>

<hr>

<table border="1">
	<?php
	foreach($tabla as $fila) 
		{
	?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['descripcion']; ?></td>
		<td><?php echo $fila['categoria']; ?></td>
		<td><?php echo $fila['precio']; ?></td>
	</tr>
	<?php
		}
	?>
</table>