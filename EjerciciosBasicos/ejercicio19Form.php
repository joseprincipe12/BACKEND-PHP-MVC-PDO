<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 19</title>
</head>
<body>
	<?php
		function diametro($radio_)
		{
			return round(2*$radio_,2);
		}
		function perimetro($radio_)
		{
			return round((diametro($radio_) * pi()),2);
		}
		function area($radio_)
		{
			return round((pi() * pow($radio_,2)),2);
		}
	?>

	<h1>Circulo - Form y Fun</h1>
	<p>A partir del ingreso del radio de un circulo calcular el diametro, el perimetro y el area</p>

	<?php

		//*** RECOGER VALORES Y REALIZAR CALCULOS ***//
		//Verificar si se ha enviado el form
		if(isset($_GET["txtRadio"]))
		{
			//Leer los valores enviados
			$radio = $_GET["txtRadio"];
		}
		else
		{
			//Asignar valores
			$radio = 0.0;
		}


	?>

	<form>
		<table>
			<tr>
				<td>Radio</td>
				<td><input type="text" name="txtRadio" value="<?php echo $radio; ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>
			<tr>
				<td>Diametro</td>
				<td><input type="text" value="<?php echo diametro($radio); ?>" readonly></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo perimetro($radio); ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo area($radio); ?>" readonly></td>
			</tr>


		</table>
	</form>

</body>
</html>