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
	$placaEdiar = $_GET["placaEditar"];

	//Incluir el modelo 
	require_once("models/auto.php");

    $objAuto = new Auto();

	//Ejecutar el metodo de busqueda
	$objAuto = $objAuto->getBuscarByPlaca($placaEdiar);


	//Armando la Vista
	require_once("views/editar.php");

}

//Funcion responda POST
function metodoPOST()
{	
	require_once("models/auto.php");

    $objAuto = new Auto();

	//Leer la variable enviada
	$objAuto->placa = $_POST['txtPlaca'];
	$objAuto->marca = $_POST['txtMarca'];
	$objAuto->propietario= $_POST['txtPropietario'];
	$objAuto->anno = $_POST['txtAnno'];

	//Ejecutar el metodo de actualizacion
	$objAuto->setActualizar($objAuto);

	//Armando la Vista

	require_once("views/editar.php");

}

?>