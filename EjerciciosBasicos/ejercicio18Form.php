<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 18</title>
</head>
<body>
	<?php
		function perimetro($largo_,$ancho_)
		{
			return (2 * ($largo_ + $ancho_));
		}
		function area($largo_,$ancho_)
		{
			return ($largo_*$ancho_);
		}
		function diagonal($largo_,$ancho_)
		{
			return (sqrt(pow($largo_,2)+pow($ancho_,2)));
		}
	?>
	<h1>Rectangulo - Form y Fun</h1>
	<p>A partir del ingreso de los lados de un rectangulo calcular el perimetro, el area y la diagonal</p>

	<?php
		//*** RECOGER VALORES Y REALIZAR CALCULOS ***//
		//Verificar si se ha enviado el form
		if(isset($_GET["txtLargo"]))
		{
			//Leer los valores enviados
			$largo = $_GET["txtLargo"];
			$ancho = $_GET["txtAncho"];
		}
		else
		{
			//Asignar valores
			$largo = 0.0;
			$ancho = 0.0;			
		}

	?>
	<form>
		<table>
			<tr>
				<td>Largo</td>
				<td><input type="text" name="txtLargo" value="<?php echo $largo; ?>"></td>
			</tr>
			<tr>
				<td>Ancho</td>
				<td><input type="text" name="txtAncho" value="<?php echo $ancho; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo perimetro($largo,$ancho); ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo area($largo,$ancho); ?>" readonly></td>
			</tr>
			<tr>
				<td>Diagonal</td>
				<td><input type="text" value="<?php echo diagonal($largo,$ancho); ?>" readonly></td>
			</tr>


		</table>
	</form>

</body>
</html>