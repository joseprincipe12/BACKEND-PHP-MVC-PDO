<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 20 - POO</title>
</head>
<body>
	<h1>PROGRAMACION ORIENTADA A OBJETOS</h1>
	<p>A partir del ingreso de la cantidad de productos 
	y su precio calcular el total, 
	el igv y el total incluido el igv</p>


	<?php
		//*** DECLARAR LA CLASE EN EL MISMO ARCHIVO***//
		/*
		class Venta
		{
			//Propiedades
			public $cantidad;
			public $precio;

			//Metodos
			function getTotal()
			{
				$total = $this->cantidad * $this->precio;
				return $total;
			}

			function getIgv()
			{
				$igv = 0.18 * $this->getTotal();
				return $igv;
			}

			function getTotalIgv()
			{
				$totalIgv = $this->getTotal() + $this->getIgv();
				return $totalIgv;
			}			
		}
		*/
	?>


	<?php
		//*** PROCESO POO ***//
		//Incluir el archivo externo PHP
		/*
			include
			include_once
			require
			require_once
		*/
		require_once("ejercicio20CLASS.php");

		//Instanciar la clase (crear un objeto)
		$objVenta = new Venta();


		//Recoger los valores del Form
		if(isset($_GET["txtCantidad"]))
		{
			//Asigna valores a las propiedades
			$objVenta->cantidad = $_GET["txtCantidad"];
			$objVenta->precio = $_GET["txtPrecio"];
		}else{
			//Asigna valores a las propiedades
			$objVenta->cantidad = 0;
			$objVenta->precio = 0.0;
		}

		//Ejecutar los metodos del objeto
		$total = $objVenta->getTotal();
		$igv = $objVenta->getIgv();
		$totalIgv = $objVenta->getTotalIgv();

	?>

	<form>
		<label>Cantidad</label>
		<input type="text" name="txtCantidad" value="<?php echo $objVenta->cantidad ?>">
		<label>Precio S/. </label>
		<input type="text" name="txtPrecio" value="<?php echo $objVenta->precio ?>">
		<input type="submit" value="Calcular">
	</form>

	<h1>Resultados</h1>
	<h4>Total <?php echo $total ?></h4>
	<h4>IGV <?php echo $igv ?></h4>
	<h4>Total IGV <?php echo $totalIgv ?></h4>
</body>
</html>