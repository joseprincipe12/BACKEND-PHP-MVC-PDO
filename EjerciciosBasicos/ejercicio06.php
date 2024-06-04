<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 06</title>
</head>
<body>
	<h1>Funciones Personalizadas</h1>
	<?php
		//Funcion SIN retorno de valor
		function sumar($n1, $n2)
		{
			$n1 = is_string($n1)?0:$n1;
			$n2 = is_string($n2)?0:$n2;

			$suma = $n1 + $n2;
			echo "La suma de $n1 + $n2 = $suma";
		}
		//Funcion CON retorno de valor
		function suma($n1, $n2)
		{
			$suma = $n1 + $n2;
			return $suma; 
		}

		//Funcion con Parametro con Valor Predeterminado
		function suma5($n1=0, $n2=0, $n3=0, $n4=0, $n5=0)
		{
			$suma = $n1 + $n2 + $n3 + $n4 + $n5;
			return $suma; 
		}

		//Funcion con N Parametros
		function sumaN(...$n)
		{
			$suma = 0;

			for($indice=0;$indice<=(count($n)-1);$indice=$indice+1)
			{
				$suma = $suma + $n[$indice];
			}


			return $suma; 
		}



	?>

	<h2>Funcion SIN retorno</h2>
	<?php
		//Ejecutar la funcion
		sumar(10,20);
	?>
	<h2>Funcion CON retorno</h2>
	<?php
		//Ejecutar la funcion y guardar el valor retornado
		$resultado = suma(10,20);

		echo "La suma = $resultado";
	?>

	<h2>Funcion con Parametros con Valor Predeterminado</h2>
	<?php
		//Ejecutar la funcion y guardar el valor retornado
		$resultado = suma5(10,20,30);

		echo "La suma = $resultado";
	?>

	<h2>Funcion con N Parametros</h2>
	<?php
		//Ejecutar la funcion y guardar el valor retornado
		$resultado = sumaN(10,20);

		echo "La suma = $resultado <br>";

		//Ejecutar la funcion y guardar el valor retornado
		$resultado = sumaN(10,20,30,40);

		echo "La suma = $resultado <br>";

	?>

</body>
</html>
