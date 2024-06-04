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
	//Cerrar sesion
    session_start();
    session_destroy();
    header("location:". $GLOBALS['ruta_raiz']);
    exit();
   
}

//Funcion responda POST
function metodoPOST()
{   
  
    
}

?>