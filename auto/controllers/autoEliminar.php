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
	//Recoger el ID a eliminar
	$placaEliminar = $_GET["placaEliminar"];

	//Incluir el modelo 
	require_once("models/auto.php");

    $objAuto = new Auto();

	//Ejecutar el metodo de busqueda
	$objAuto = $objAuto->getBuscarByPlaca($placaEliminar);


	//Armando la Vista

	require_once("views/eliminar.php");


}

//Funcion responda POST
function metodoPOST()
{	
	$placaEliminar = $_POST["txtPlaca"];

	//Incluir el modelo 
	require_once("models/auto.php");

    $objAuto = new Auto();

	//Ejecutar el metodo de eliminacion
	$objAuto = $objAuto->setEliminar($placaEliminar);

	//Armando la Vista

	echo "<h1>Eliminando..</h1>";

	//Redireccionar
	header("refresh:1;url=../auto");

}

?>