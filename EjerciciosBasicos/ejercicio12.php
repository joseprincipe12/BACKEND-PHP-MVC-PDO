<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 12</title>
</head>
<body>
	<h1>Array</h1>
	<?php
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
		var_dump($meses);
	?>
	
	<h1>Tabla 3: Forma 1</h1>

	<table border="1">
		<tr>
		<?php
			foreach ($meses as $mes) 
			{
				echo "<td> $mes </td>";
			}
		?>
		</tr>
	</table>


	<h1>Tabla 3: Forma 2</h1>
	<table border="1">
		<tr>
		<?php
			foreach ($meses as $mes) 
			{
		?>

			<td><?php echo $mes ?></td>
			
		<?php
			}
		?>
		</tr>
	</table>



</body>
</html>