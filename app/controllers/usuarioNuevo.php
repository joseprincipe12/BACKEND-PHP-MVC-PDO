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
    require_once("models/usuario.php");

    //Creamos un objeto 
    $objUsario = new Usuario();

    //Controlamos los valores de la variable
    $objUsario->usuario = "";
    $objUsario->clave = "";
    $claveRepetida = "";
    $objUsario->nombre = "";
    $objUsario->apellido = "";
    $objUsario->correo = "";
    
    //cargamos vista
	require_once("views/nuevo.php");
}

//Funcion responda POST
function metodoPOST()
{   
    //Incluir el modelo 
    require_once("models/usuario.php");

    //Creamos un objeto 
    $objUsario = new Usuario();

    //Recuperamos los valores por el metodo get
    $objUsario->usuario = $_POST["txtUsuario"];
    $objUsario->clave = $_POST["txtClave"];
    $claveRepetida = $_POST["txtClaveRepetiva"];
    $objUsario->nombre = $_POST["txtNombre"];
    $objUsario->apellido = $_POST["txtApellido"];
    $objUsario->correo = $_POST["txtEmail"];

    //Recogemos el valor de existencia del usuario
    $existencia = $objUsario->setExistencia($objUsario->usuario);

    if($existencia == 0){ 
        // En caso el usuario no exista 
        //Verificamos si las claves son iguales
        if($objUsario->clave == $claveRepetida ){
            //Agregamos el nuevo usuario y guardamos el nuevo usario
            $objUsario->usuario = $objUsario->setRegistrarUsuario($objUsario);
            //cargamos vista
            require_once("views/nuevo.php");    
        }else{
            //Si las claves no coinciden 
            require_once("views/nuevo.php");
            echo "<div style='float: left; margin-left: 100px; color : red;'>Las contraseñas no coninciden</div>";
        }
        
    }else{
        //si el usario existe
        require_once("views/nuevo.php");
        echo "<div style='float: left; margin-left: 100px; color : red;'>El usuario ya existe</div>";
    } 
}

?>