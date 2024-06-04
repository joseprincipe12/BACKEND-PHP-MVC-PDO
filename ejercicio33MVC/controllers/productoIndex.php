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
	//Inicializar variables
	$descripcionBuscar = "";
	$tabla = array();

	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/index.php");
	require_once("views/foot.php");
}

//Funcion responda POST
function metodoPOST()
{
	//Leer la variable enviada
	$descripcionBuscar = $_POST['txtDescripcionBuscar'];

	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Ejecutar el metodo de busqueda por descripcion
	$tabla = $objProducto->getBuscarByDescripcion($descripcionBuscar);

	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/index.php");
	require_once("views/foot.php");
}

?>