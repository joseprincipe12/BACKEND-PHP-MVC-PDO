<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 23 - POO</title>
</head>
<body>
	<h1>Triangulo - POO</h1>
	<p>A partir del ingreso de los lados de un triangulo, determinar:
	si existe o no. Si existe => calcular el perimetro, area y el tipo de triangulo</p>

	<?php
		//Incluir archivo externo
		require_once("ejercicio23CLASS.php");
		//Instanciar la clase Triangulo
		$objTriangulo = new Triangulo();

		//Verificar si se envio el form
		if(isset($_GET["txtA"]))
		{
			//Leer los parametros
			$objTriangulo->a = $_GET["txtA"]; 
			$objTriangulo->b = $_GET["txtB"];
			$objTriangulo->c = $_GET["txtC"];
		}else{
			//Asignar valores
			$objTriangulo->a = 0; 
			$objTriangulo->b = 0;
			$objTriangulo->c = 0;

		}

	?>

	<form>
		<table>
			<tr>
				<td>Lado A</td>
				<td><input type="text" name="txtA" value="<?php echo $objTriangulo->a; ?>"></td>
			</tr>
			<tr>
				<td>Lado B</td>
				<td><input type="text" name="txtB" value="<?php echo $objTriangulo->b; ?>"></td>
			</tr>
			<tr>
				<td>Lado C</td>
				<td><input type="text" name="txtC" value="<?php echo $objTriangulo->c; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Calcular"></td>
			</tr>

			<tr>
				<td>Existe</td>
				<td><input type="text" value="<?php echo ($objTriangulo->getExiste())?"SI":"NO"; ?>" readonly></td>
			</tr>
			<tr>
				<td>Perimetro</td>
				<td><input type="text" value="<?php echo $objTriangulo->getPerimetro(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" value="<?php echo $objTriangulo->getArea(); ?>" readonly></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td><input type="text" value="<?php echo $objTriangulo->getTipo(); ?>" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td><img src="<?php echo $objTriangulo->getTipo() . '.png' ?>" width="200px"></td>
			</tr>



		</table>
	</form>

</body>
</html>
