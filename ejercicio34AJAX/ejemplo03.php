<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Ejemplo 03</title>

	<!-- Importar la libreria JQUERY -->
	<script type="text/javascript" src="jquery-3.7.1.min.js"></script>

	<script type="text/javascript">
		//AJAX - Java Script
		function cargarOpciones01()
		{
			//alert("Clic en cargar texto");

			//Instanciar un objeto AJAX
			var objAjax = new XMLHttpRequest();

			//Declarar la funcion anonima
			//y asignarla al objeto AJAX
			objAjax.onreadystatechange = function()
			{
				//Controlar el estado de la solictud
				if((objAjax.readyState==4)&&(objAjax.status==200))
				{
					//Leer el contenido del texto enviado por el servidor
					var texto = objAjax.responseText;
					//Mostrar en la pagina
					document.getElementById("lista01").innerHTML = texto;
				}
			}

			//Preparar la solicitud: metodo GET, recurso, asincrono
			objAjax.open("GET","opciones01.txt",true);

			//Ejecutar el metodo send: envia la solicitud preparada
			objAjax.send();

		}

		//AJAX - JQUERY
		function cargarOpciones02()
		{
			$("#lista02").load("opciones02.txt");
		}


	</script>

</head>
<body>
	<h1>AJAX - Java Script - Lista de Opciones</h1>
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

	<button onclick="cargarOpciones01()">Cargar Lista de Opciones 01</button>
	<hr>
		<select id="lista01">
			<option>-Seleccione-</option>
		</select>
	<hr>
	<button onclick="cargarOpciones02()">Cargar Lista de Opciones 02</button>
	<hr>
		<select id="lista02">
			<option>-Seleccione-</option>
		</select>
	<hr>

</body>
</html>