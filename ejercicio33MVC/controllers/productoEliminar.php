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
	$idEliminar = $_GET['idEliminar'];

	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Ejecutar el metodo de busqueda
	//Recoger el objeto encontrado
	$objProducto = $objProducto->getBuscarById($idEliminar);


	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/eliminar.php");
	require_once("views/foot.php");	
}

//Funcion responda POST
function metodoPOST()
{
	//Recoger el ID a eliminar
	$idEliminar = $_POST['txtId'];

	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Ejecutar el metodo de Eliminacion
	$objProducto->setEliminar($idEliminar);

	//Armando la Vista
	require_once("views/head.php");
	echo "<h1>Eliminando...</h1>";
	require_once("views/foot.php");	

	//Redireccionar al index
	header("refresh:1;url=../producto");

}

?>