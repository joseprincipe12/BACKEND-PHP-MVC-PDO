<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        .contenedor {
            position: relative;
            width: 630px;
            height: 600px;

        }

        .arriba-derecha {
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 50px;

        }

        .abajo-derecha {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
            height: 50px;

        }
    </style>
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
            <div class="contenedor">
                <DIV  class="arriba-derecha">
                    <h3><?php echo $_SESSION["user"] ?></h3>    
                </DIV>
                <DIV class="abajo-derecha">
                    <a href="<?php echo $GLOBALS['ruta_raiz']; ?>/usuario/cerrar">cerrar</a> 
             </DIV>
            </div>
      
</body>
</html>