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
	//Recoger el ID a editar
	$idEditar = $_GET['idEditar'];

	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Ejecutar el metodo de busqueda
	//Recoger el objeto encontrado
	$objProducto = $objProducto->getBuscarById($idEditar);


	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/editar.php");
	require_once("views/foot.php");

}

//Funcion responda POST
function metodoPOST()
{
	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Leer las variable enviadas
	$objProducto->id = $_POST['txtId'];
	$objProducto->descripcion = $_POST['txtDescripcion'];
	$objProducto->categoria = $_POST['txtCategoria'];
	$objProducto->precio = $_POST['txtPrecio'];

	//Ejecutar el metodo de actualizacion
	$objProducto->setActualizar($objProducto);

	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/editar.php");
	require_once("views/foot.php");
}

?>