<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   
</head>
    <?php
		//Iniciando gestion de sesiones
		//Si NO existe una sesion iniciada
		if(!isset($_SESSION["user"]))
		{
			//Redireccionar al inicio
			require_once("controllers/inicioIndex.php");
			exit();
		}
	?>
<body>
    <table border="1">
        <tr>
            <th style="width: 100px;"><a href="">Inicio</a></th>
            <th style="width: 100px;"><a href="">Servicios</a></th>
            <th style="width: 300px;"><a href="">Centro de Ayuda</a></th>
            <th style="width: 100px;"><a href="<?php echo $GLOBALS["ruta_raiz"];?>/mi/usuario">Mi Usuario</a></th>
        </tr>
    </table>
</body>
</html>