<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 26 - POO</title>
</head>
<body>
	<h1>PROGRAMACION ORIENTADA A OBJETOS</h1>
	<p>A partir del ingreso de la cantidad de productos 
	y su precio calcular el total, 
	el igv y el total incluido el igv</p>

	<?php
		//*** PROCESO POO ***//
		//Incluir el archivo externo PHP
		require_once("ejercicio26CLASS.php");

		//Recoger los valores del Form
		if(isset($_GET["txtCantidad"]))
		{
			//Asignar valores  a variables
			$cantidad = $_GET["txtCantidad"];
			$precio = $_GET["txtPrecio"];
		}else{
			//Asigna valores a variables
			$cantidad = 0.0;
			$precio = 0.0;
		}

		//*** CONSTRUCTOR ***
		//Utilizar el contructor para instanciar
		$objVenta = new Venta($cantidad,$precio);

		//Ejecutar los metodos del objeto
		$total = $objVenta->getTotal();
		$igv = $objVenta->getIgv();
		$totalIgv = $objVenta->getTotalIgv();

	?>

	<form>
		<label>Cantidad</label>
		<input type="text" name="txtCantidad" value="<?php echo $objVenta->getCantidad(); ?>">
		<label>Precio S/. </label>
		<input type="text" name="txtPrecio" value="<?php echo $objVenta->getPrecio() ?>">
		<input type="submit" value="Calcular">
	</form>

	<h1>Resultados</h1>
	<h4>Total <?php echo $total ?></h4>
	<h4>IGV <?php echo $igv ?></h4>
	<h4>Total IGV <?php echo $totalIgv ?></h4>
</body>
</html>