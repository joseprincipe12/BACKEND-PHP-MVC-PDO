<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Ejemplo 02</title>

	<!-- Importar la libreria JQUERY -->
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>


	<script type="text/javascript">
		function cargarTexto()
		{
			//Ejecutar la funcion AJAX de JQUERY
			$("#p1").load("parrafo.txt");
		}		
	</script>

</head>
<body>
	<h1>AJAX - JQUERY</h1>
	<form>
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="txtUsuario"> </td>
			</tr>
			<tr>
				<td>Clave:</td>
				<td><input type="password" name="txtClave"> </td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Iniciar"></td>
			</tr>

		</table>
	</form>

	<button onclick="cargarTexto()">Cargar Texto</button>
	<hr>
	<p1 id="p1"></p1>
	<hr>

</body>
</html>