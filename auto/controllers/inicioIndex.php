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
    
    $tablaDatos = $objAuto->getDatos();
    $nombreMarca = "";
    $tabla = array();

	//Armando la Vista
	require_once("views/index.php");
}

//Funcion responda POST
function metodoPOST()
{   

    if (isset($_POST["txtMarca"])) {
        $nombreMarca = $_POST["txtMarca"];
    } else {
        $nombreMarca = "";
    }

    require_once("models/auto.php");

    $objAuto = new Auto();

    $tabla = $objAuto->getBuscarByMarca("$nombreMarca");

    $tablaDatos = $objAuto->getDatos();


    require_once("views/index.php");
}

?>