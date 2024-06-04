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

	//Incluir el modelo
	require_once("models/producto.php");

	//Instanciar el modelo
	$objProducto = new Producto();

	//Leer las variable enviadas
	$objProducto->id = 0;
	$objProducto->descripcion = "";
	$objProducto->categoria = "";
	$objProducto->precio = 0.0;

	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/agregar.php");
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

	//Verificar si el ID es cero
	if($objProducto->id==0)
	{
		//Insertar el nuevo producto
		//y leer el nuevo ID
		$objProducto->id = $objProducto->setInsertar($objProducto);
	}

	//Armando la Vista
	require_once("views/head.php");
	require_once("views/producto/agregar.php");
	require_once("views/foot.php");
}
?>