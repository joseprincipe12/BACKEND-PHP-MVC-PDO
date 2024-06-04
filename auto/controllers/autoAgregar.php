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
    require_once("models/auto.php");

    $objAuto = new Auto();

    //Establecer valores iniciales
	$objAuto->placa = "";
	$objAuto->marca = "";
	$objAuto->propietario = "";
	$objAuto->anno = "";

	require_once("views/agregar.php");
}

//Funcion responda POST
function metodoPOST()
{   
    
    require_once("models/auto.php");

    $objAuto = new Auto();

    $objAuto->placa = $_POST["txtPlaca"];
	$objAuto->marca = $_POST["txtMarca"];
	$objAuto->propietario = $_POST["txtPropietario"];
	$objAuto->anno = $_POST["txtAnno"];

    
    $objAuto->placa = $objAuto->setInsertar($objAuto);
    

    //Armando la Vista

	require_once("views/agregar.php");
}

?>