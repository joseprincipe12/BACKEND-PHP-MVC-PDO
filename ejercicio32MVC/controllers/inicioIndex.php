<h1>Controlador Inicio Index</h1>

<?php
//Controlar el Tipo de Solicitud
switch($_SERVER['REQUEST_METHOD']) 
{
	case 'GET':
		metodoGET();
		break;
	
	case 'POST':
		metodoPOST();
		break;
}

//Funcion responda GET
function metodoGET()
{
	echo "<h2>Metodo GET</h2>";
}

//Funcion responda POST
function metodoPOST()
{
	echo "<h2>Metodo POST</h2>";
}

?>