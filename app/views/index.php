<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>app</title>
</head>

<body>

    <h1>Acceso a la Aplicacion</h1>

    <form method="post">

        <table>

            <tr>
                <th>Usuario</th>
                <td><input type="text" name="txtUsuario" value=""></td>
            </tr>
            <tr>
                <th>Clave</th>
                <td><input type="password" name="txtClave" value=""></td>
            </tr>
            <tr>
                <th style="width: 100px;"></th>
                <td><input type="submit" value="Ingresar"></td>
            </tr>
            <tr>
                <th style="width: 100px;"></th>
                <td><a href="<?php echo $GLOBALS['ruta_raiz']; ?>/usuario/nuevo">Registrar nuevo usuario</a></td>
            </tr>

        </table>

    </form>
</body>

</html>