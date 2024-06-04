<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 14 - Formulario</title>
</head>
<body>
	<h1>Formularios</h1>
	<p>Permite la captura de datos por parte del usuario en el Front-End (Cliente)</p>
	<p>Permite el envio de los valores al Back-End (servidor)</p>

	<?php

		//RECOGER VALORES ENVIADOS DESDE EL FRONT-END
		//ARRAY GLOBAL
		/*
			$_GET[] -> METODO GET
			$_POST[] -> METODO POST
		*/

		//CONTROLAR SI SE HA ENVIADO VALORES
		if(isset($_GET["txtUsuario"]))
		{
			//LEER LOS VALORES
			$usuarioGET = $_GET["txtUsuario"];

			echo "GET Usuario Leido<br>";
		}
		else
		{
			//ASIGNAR VALOR
			$usuarioGET = "";

			echo "GET Usuario NO Leido<br>";
		}

		//CONTROLAR SI SE HA ENVIADO VALORES
		if(isset($_POST["txtUsuario"]))
		{
			//LEER LOS VALORES
			$usuarioPOST = $_POST["txtUsuario"];

			echo "POST Usuario Leido<br>";
		}		
		else
		{
			//ASIGNAR VALOR
			$usuarioPOST = "";

			echo "POST Usuario NO Leido<br>";
		}
		
	?>
	
	<!-- Definiendo el Formulario HTML -->
	<form method="post">
		<!-- Control de Captura de Datos -->
		<!-- name: back-end id: front-end -->
		<input type="text" name="txtUsuario" id="txtUsuario">

		<input type="submit" value="PROCESAR">
	</form>

</body>
</html>