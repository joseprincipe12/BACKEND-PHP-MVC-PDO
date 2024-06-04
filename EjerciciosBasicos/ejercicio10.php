<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 11</title>
</head>
<body>
	<h1>Array</h1>
	<?php
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
		var_dump($meses);
	?>
	
	<h1>Tabla 1: Forma 1</h1>

	<table border="1">
		<?php
			foreach ($meses as $mes) 
			{
				echo "<tr>";
				echo "<td> $mes </td>";
				echo "</tr>";
			}
		?>
	</table>


	<h1>Tabla 1: Forma 2</h1>
	<table border="1">
		<?php
			foreach ($meses as $mes) 
			{
		?>
		<tr>
			<td><?php echo $mes ?></td>
		</tr>
		<?php
			}
		?>
	</table>



</body>
</html>