<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 13</title>
</head>
<body>
	<h1>Array</h1>
	<?php
		$temperaturas = array("Enero"=>28,"Febrero"=>24,"Marzo"=>26,"Abril"=>29,"Mayo"=>27,"Junio"=>26,"Julio"=>22,"Agosto"=>23,"Setiembre"=>25,"Octubre"=>25,"Noviembre"=>26,"Diciembre"=>27);
		var_dump($temperaturas);
	?>
	<h1>Tabla 4: Forma 1</h1>
	<table border="1">
		<tr>
		<?php
			foreach ($temperaturas as $mes=>$tmp) 
			{
				echo "<td> $mes </td>";
			}
		?>
		</tr>
		
		<tr>
		<?php
			foreach ($temperaturas as $mes=>$tmp) 
			{
				echo "<td> $tmp </mes>";
			}
		?>
		</tr>
	</table>
	<h1>Tabla 4: Forma 2</h1>
	<table border="1">
		<tr>
		<?php
			foreach ($temperaturas as $mes=>$tmp)  
			{
		?>
			<td><?php echo $mes ?></td>
		<?php
			}
		?>
		</tr>
		<tr>
		<?php
			foreach ($temperaturas as $mes=>$tmp)  
			{
		?>
			<td><?php echo $tmp ?></td>
		<?php
			}
		?>
		</tr>
	</table>



</body>
</html>