<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<title>Ejemplo 01</title>

	<script type="text/javascript">
		function cargarTexto()
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
					document.getElementById("p1").innerHTML = texto;
				}
			}

			//Preparar la solicitud: metodo GET, recurso, asincrono
			objAjax.open("GET","parrafo.txt",true);

			//Ejecutar el metodo send: envia la solicitud preparada
			objAjax.send();

		}		
	</script>

</head>
<body>
	<h1>AJAX - Java Script</h1>
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