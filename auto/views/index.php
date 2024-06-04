<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .centered{
            width: 50%;
            margin-left: auto ;
            margin-right: auto;
            padding: 20px;
        }

        td {
            text-align: center;
            padding: 10px;
        }

        .thp{
            text-align: center;
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <div class="centered">
        <TABLE  >
            <TR> 
                <TH >
                    <form method="POST" >
                        <input type="submit" value="Buscar" style="width: 80px;">
                        <select name="txtMarca" style="width: 100px;">
                            <?php
                                foreach($tablaDatos as $fila) 
                                {   
                                    if ($fila[0] == $nombreMarca) {
                                        echo "<option selected>$fila[0]</option>";
                                    } else {
                                        echo "<option>$fila[0]</option>";
                                    }
                                }
                            ?>
                        </select>
                    </form>
                </TH> 
                <TH style="width: 100px;"></TH> 
                <TH style="width: 100px;"></TH>
                <TH style="width: 100px;"></TH>  
                <TH ><button style="width: 80px;"><a style="text-decoration: none" href="<?php echo $GLOBALS['ruta_raiz']; ?>/auto/agregar">Agregar</a></button></TH>
            </TR>     
        </TABLE>    
    </div>
    <div class="centered">
        <table>
            <tr>
                <th class="thp" style="width: 75px;">PLACA</th>
                <th class="thp" style="width: 75px;">MARCA</th>
                <th class="thp" style="width: 120px;">PROPIETARIO</th>
                <th class="thp" style="width: 75px;">AÑO</th>
            </tr>

        <?php
            foreach($tabla as $fila) 
            {
        ?>

        <tr>
            <td style="width: 75px;"><?php echo $fila['placa']; ?></td>
            <td style="width: 75px;" ><?php echo $fila['marca']; ?></td>
            <td style="width: 120px;"><?php echo $fila['propietario']; ?></td>
            <td style="width: 75px;"><?php echo $fila['anno']; ?></td>

            <td style="width: 60px;">
                <button>
                    <a style="text-decoration: none" href="<?php echo $GLOBALS['ruta_raiz']; ?>/auto/editar?placaEditar=<?php echo $fila['placa']; ?>">Editar</a>
                </button>
            </td>

            <td style="width: 60px;">
                <button>
                    <a style="text-decoration: none" href="<?php echo $GLOBALS['ruta_raiz']; ?>/auto/eliminar?placaEliminar=<?php echo $fila['placa']; ?>">Eliminar</a>
                </button>
            </td>
            
        </tr>

        <?php
            }
        ?>

	</table>

    </div>

</body>
</html>