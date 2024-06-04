<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 24 - POO</title>
</head>
<body>
	<h1>PROGRAMACION ORIENTADA A OBJETOS</h1>
	<p>A partir del ingreso de la cantidad de productos 
	y su precio calcular el total, 
	el igv y el total incluido el igv</p>

	<?php
		//*** PROCESO POO ***//
		//Incluir el archivo externo PHP
		require_once("ejercicio24CLASS.php");

		//Instanciar la clase
		$objVenta = new Venta();

		//Recoger los valores del Form
		if(isset($_GET["txtCantidad"]))
		{
			//Asignar valores a variables
			//*** ENCAPSULADOS ***
			$objVenta->setCantidad($_GET["txtCantidad"]);
			$objVenta->setPrecio($_GET["txtPrecio"]);
		}else{
			//Asigna valores a variables
			$objVenta->setCantidad(0.0);
			$objVenta->setPrecio(0.0);
		}


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