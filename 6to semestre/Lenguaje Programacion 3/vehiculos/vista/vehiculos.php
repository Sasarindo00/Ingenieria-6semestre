<!DOCTYPE html>
<html>
    <head>
        <style type = "text/css">

            body{
                background-color: ivory;
                color: black;
            }

            table{
                border-color: black;
            }
        </style>
        <meta charset="UTF-8">
        <title>Vehiculos</title>
        <link rel="stylesheet" href="../css/newcss1.css">
       
    </head>
    <?php
    include_once '../control/VehiculoControl.class.php';
    $vehiculosControl = new VehiculoControl();
    $vehiculosList;
    ?>
    <body>

        <h1 align="center">Vehiculos</h1>


        <?php
        $reg = ( isset($_GET['reg']) ) ? $_GET['reg'] : '';

        if ($reg != 1) {
            ?>


            <table width="90%" align="center" border="1">
                <tr>
                    <th>ID</th>
                    <th>Transmision</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Año</th>
                    <th width="70px">

                        <a href="?reg=1">NUEVO</a>

                    </th>
                    <th width="70px"></th>
                </tr>

                <?php
                $vehiculosList = $vehiculosControl->listar('');
                // var_dump($vehiculosSession);

                foreach ($vehiculosList as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->transmision; ?></td>
                        <td><?php echo $value->modelo; ?></td>
                        <td><?php echo $value->marca; ?></td>
                        <td><?php echo $value->anio; ?></td>
                        <td align="center"> <a href="?reg=1&id=<?php echo $value->id; ?>">mod</a> </td>
                        <td align="center"> <a href="../sesiones/vehiculosSession.php?del=1&id=<?php echo $value->id; ?>">Elim</a> </td>
                    </tr>
                    <?php
                }
                ?>

            </table>

            <?php
        } else {
            
            $id = $transmision = $modelo = $marca = $anio = '';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $vehiculosList = $vehiculosControl->listar( "WHERE id=$id" );
                //var_dump($vehiculosSession);
                
                $transmision = $vehiculosList[0]->transmision;
                $modelo = $vehiculosList[0]->modelo;
                $marca = $vehiculosList[0]->marca;
                $anio = $vehiculosList[0]->anio;
            }
            
            ?>


            <form action="../sesiones/vehiculosSession.php" method="post" >

                <table border="1" align="center" >
                    <tr>
                        <td>Transmision: </td>
                        <td><input type="text" name="transmision" value="<?php echo $transmision; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Modelo: </td>
                        <td><input type="text" name="modelo" value="<?php echo $modelo; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Marca: </td>
                        <td><input type="text" name="marca" value="<?php echo $marca; ?>" /> </td>
                    </tr>
                    <tr>
                        <td>Anio: </td>
                        <td><input type="number" name="anio" value="<?php echo $anio; ?>" min="1" /> </td>
                    </tr>

                    <tr>
                        <td colspan="2">-</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" /> - <a href="?">Cancelar</a>
                            <input  type="hidden" name="id" value="<?php echo $id; ?>" />
                        </td>
                    </tr>

                </table>

            </form>





            


            <?php
        }
        ?>


    </body>
</html>
