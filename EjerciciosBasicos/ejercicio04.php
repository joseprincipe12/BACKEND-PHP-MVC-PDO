<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 04</title>
</head>
<body>
	<h1>Estructura Repetitivas</h1>
	
	<h2>WHILE</h2>

	<table border="1">
	<?php
		$numero = 5;
		$contador = 1;

		while($contador<=10) 
		{
			echo "<tr>";
			echo "<td>$numero</td>";
			echo "<td>x</td>";
			echo "<td>$contador</td>";
			echo "<td>=</td>";
			echo "<td>" . $contador*$numero ."</td>";
			echo "</tr>";
			
			$contador=$contador+1;
		}
	?>
	</table>

	<h2>DO - WHILE</h2>

	<table border="4">
	<?php
		$numero = 15;
		$contador = 1;

		do
		{
			echo "<tr>";
			echo "<td>$numero</td>";
			echo "<td>x</td>";
			echo "<td>$contador</td>";
			echo "<td>=</td>";
			echo "<td>" . $contador*$numero ."</td>";
			echo "</tr>";
			
			$contador=$contador+1;
		}while($contador<=10);

	?>
	</table>

	<h2>FOR</h2>

	<table border="8">
	<?php
		$numero = 25;
		for($contador = 1;$contador<=10;$contador=$contador+1)
		{
			echo "<tr>";
			echo "<td>$numero</td>";
			echo "<td>x</td>";
			echo "<td>$contador</td>";
			echo "<td>=</td>";
			echo "<td>" . $contador*$numero ."</td>";
			echo "</tr>";
		}
	?>
	</table>

	<h2>FOR EACH</h2>

	<table border="12">
	<?php
		$numero = 35;
		$contador = array(1,2,3,4,5,6,7,8,9,10);

		//Recorrer cada elemento del array
		foreach($contador as $elemento)
		{
			echo "<tr>";
			echo "<td>$numero</td>";
			echo "<td>x</td>";
			echo "<td>$elemento</td>";
			echo "<td>=</td>";
			echo "<td>" . $elemento*$numero ."</td>";
			echo "</tr>";
		}
	?>
	</table>

	<h2>BREAK</h2>

<table border="1">
	<?php
		$numero = 5;
		$contador = 1;

		while($contador<=10) 
		{
			echo "<tr>";
			echo "<td>$numero</td>";
			echo "<td>x</td>";
			echo "<td>$contador</td>";
			echo "<td>=</td>";
			echo "<td>" . $contador*$numero ."</td>";
			echo "</tr>";
			
			//Si el contador es 5 se corta la ejecucion
			if ($contador==5) 
			{
				break;
			}

			$contador=$contador+1;
		}
	?>
	</table>	

</body>
</html>