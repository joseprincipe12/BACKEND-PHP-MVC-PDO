<?php
session_start(); 


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
    require_once("views/panel.php");
    require_once("views/miUsuario.php");
   
}

//Funcion responda POST
function metodoPOST()
{   
    //Declaramos variables y recuperamos los valores por el metodo get
     $usuario = $_POST["txtUsuario"];
    $usuario = $_POST["txtUsuario"];
    $claveNueva = $_POST["txtClaveNueva"];
    $claveRepetida = $_POST["txtClaveRepetida"];

    //Incluir el modelo 
    require_once("models/usuario.php");

    //Creamos un objeto 
    $objUsuario = new Usuario();

    //Controlamos que las claves sean iguales
    if($claveNueva == $claveRepetida  ){
        $objUsuario->setCambioClave($usuario,$claveNueva);
        require_once("views/panel.php");
        echo "<h1>Cambiando la contraseña...</h1>";
        require_once("views/miUsuario.php");
    }else{
        require_once("views/panel.php");
        require_once("views/miUsuario.php");
        echo "<div style='float: left; margin-left: 100px; color : red;'>Las contraseñas no coninciden</div>";
    }
    
    //Redireccionar al index
	header("refresh:1;url= " . $GLOBALS["ruta_raiz"] ."/mi/Usuario");
}

?>