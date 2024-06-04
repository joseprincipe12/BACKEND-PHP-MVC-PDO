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
    //Incluir el modelo 
    require_once("models/usuario.php");
    //Creamos un objeto 
    $objUsario = new Usuario();

    //Controlamos los valores de la variable
    $usuario = "";
    $clave = "";
    $tabla = array();
    
    //Verificacmos si la sesion esta iniciada
    if(isset($_SESSION["user"]))
    {
        //Si exite user icluimos views de la pagina
        require_once("views/panel.php");
        require_once("views/inicio.php");
        exit();
    }else{
        //En caso no exista incluimos el view de inicio
        require_once("views/index.php");
    }
   
}

//Funcion responda POST
function metodoPOST()
{   
    //Declaramos variables y recuperamos los valores por el metodo get
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];

    //Incluir el modelo 
    require_once("models/usuario.php");

    //Creamos un objeto 
    $objUsario = new Usuario();
    
    //Guardamos los datos recuperados en un varibale tabala
    $tabla = $objUsario->getUsuarioClave($usuario);


    if($tabla == false){ //En caso la tabla no existe
        require_once("views/index.php");
        echo "<div style='float: left; margin-left: 100px; color : red;'>Usuario o Contraseña incorrectos !!</div>"; 
    }else{
        //Si exite
        //comprobamos que el usurio y la clave sean corretas
        if($tabla["usuario"] == $usuario && $tabla["clave"] == $clave){ 
            //Guardamosel usario en la varible user
            $_SESSION["user"] = $tabla["usuario"];
            //Cargamos las vistas principales
            require_once("views/panel.php");
            require_once("views/inicio.php"); 
            exit();
        }else{
            //En caso que los datos sean incorrectos cargamos el login y mostramos un mensaje
            require_once("views/index.php");
            echo "<div style='float: left; margin-left: 100px; color : red;'>Usuario o Contraseña incorrectos !!</div>"; 
        }
    }

}

?>