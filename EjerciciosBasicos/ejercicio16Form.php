<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Rectangulo</h1>
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

		//Calculos
		$perimetro = 2 * ($largo + $ancho);
		$area = $largo * $ancho;
		$diagonal = sqrt(pow($largo,2)+pow($ancho,2));
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
				<td><input type="text" value="<?php echo $perimetro; ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo $area; ?>" readonly></td>
			</tr>
			<tr>
				<td>Diagonal</td>
				<td><input type="text" value="<?php echo $diagonal; ?>" readonly></td>
			</tr>


		</table>
	</form>

</body>
</html>