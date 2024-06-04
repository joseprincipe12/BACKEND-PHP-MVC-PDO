<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 25 - POO</title>
</head>
<body>
	<h1>Rectangulo - POO</h1>
	<p>A partir del ingreso de los lados de un rectangulo calcular el perimetro, el area y la diagonal</p>

	<?php
		//*** PROCESO POO ***//
		//Incluir el archivo externo PHP
		require_once("ejercicio25CLASS.php");

		//Instanciar la clase (crear un objeto)
		$objRectangulo = new Rectangulo();

		//Verificar si se ha enviado el form
		if(isset($_GET["txtLargo"]))
		{
			//Leer los valores enviados
			$objRectangulo->setLargo($_GET["txtLargo"]);
			$objRectangulo->setAncho($_GET["txtAncho"]);
		}
		else
		{
			//Asignar valores
			$objRectangulo->setLargo(0.0);
			$objRectangulo->setAncho(0.0);
		}

	?>
	<form>
		<table>
			<tr>
				<td>Largo</td>
				<td><input type="text" name="txtLargo" value="<?php echo $objRectangulo->getLargo(); ?>"></td>
			</tr>
			<tr>
				<td>Ancho</td>
				<td><input type="text" name="txtAncho" value="<?php echo $objRectangulo->getAncho(); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo $objRectangulo->getPerimetro(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo $objRectangulo->getArea(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Diagonal</td>
				<td><input type="text" value="<?php echo $objRectangulo->getDiagonal(); ?>" readonly></td>
			</tr>


		</table>
	</form>

</body>
</html>