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
	//Armando la Vista
	require_once("views/head.php");
	require_once("views/inicio/index.php");
	require_once("views/foot.php");
}

//Funcion responda POST
function metodoPOST()
{

}

?>