<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 19</title>
</head>
<body>
	<h1>Circulo - POO</h1>
	<p>A partir del ingreso del radio de un circulo calcular el diametro, el perimetro y el area</p>

	<?php

		//*** PROCESO POO ***//
		//Incluir el archivo externo PHP
		require_once("ejercicio22CLASS.php");

		//Instanciar la clase (crear un objeto)
		$objCirculo = new Circulo();

		//Verificar si se ha enviado el form
		if(isset($_GET["txtRadio"]))
		{
			//Leer los valores enviados
			$objCirculo->radio = $_GET["txtRadio"];
		}
		else
		{
			//Asignar valores
			$objCirculo->radio = 0.0;
		}


	?>

	<form>
		<table>
			<tr>
				<td>Radio</td>
				<td><input type="text" name="txtRadio" value="<?php echo $objCirculo->radio; ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>
			<tr>
				<td>Diametro</td>
				<td><input type="text" value="<?php echo $objCirculo->getDiametro(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo $objCirculo->getPerimetro(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo $objCirculo->getArea(); ?>" readonly></td>
			</tr>


		</table>
	</form>

</body>
</html>