<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 17 - Formulario y Funciones</title>
</head>
<body>
	<?php
		//** FUNCIONES ** //
		function total($cantidad_,$precio_)
		{
			$total_ = $cantidad_*$precio_;
			return $total_;
		}

		function igv($cantidad_,$precio_)
		{
			$igv_ = 0.18*total($cantidad_,$precio_);
			return $igv_;
		}

		function totalIgv($cantidad_,$precio_)
		{
			$totalIgv_ = total($cantidad_,$precio_) + igv($cantidad_,$precio_);
			return $totalIgv_;
		}

	?>


	<h1>Formulario y Funciones</h1>
	<p>A partir del ingreso de la cantidad de productos 
	y su precio calcular el total, 
	el igv y el total incluido el igv</p>
	<?php
		//Recoger los valores del Form
		if(isset($_GET["txtCantidad"]))
		{
			$cantidad = $_GET["txtCantidad"];
			$precio = $_GET["txtPrecio"];
		}else{
			$cantidad = 0;
			$precio = 0.0;
		}

		//Calcular
		$total = total($cantidad,$precio);
		$igv = igv($cantidad,$precio);
		$totalIgv = totalIgv($cantidad,$precio);

	?>

	<form>
		<label>Cantidad</label>
		<input type="text" name="txtCantidad" value="<?php echo $cantidad ?>">
		<label>Precio S/. </label>
		<input type="text" name="txtPrecio" value="<?php echo $precio ?>">
		<input type="submit" value="Calcular">
	</form>

	<h1>Resultados</h1>
	<h4>Total <?php echo $total ?></h4>
	<h4>IGV <?php echo $igv ?></h4>
	<h4>Total IGV <?php echo $totalIgv ?></h4>
</body>
</html>