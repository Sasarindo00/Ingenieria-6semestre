<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personas</title>
    </head>
    <?php
    include_once '../control/PersonasControl.class.php';
    $personasControl = new PersonasControl();
    $personasList;
    ?>
    <body>

        <h1 align="center">Personas</h1>


        <?php
        $reg = ( isset($_GET['reg']) ) ? $_GET['reg'] : '';

        if ($reg != 1) {
            ?>


            <table width="90%" align="center" border="1">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Edad</th>
                    <th width="70px">

                        <a href="?reg=1">NUEVO</a>

                    </th>
                    <th width="70px"></th>
                </tr>

                <?php
                $personasList = $personasControl->listar('');
                // var_dump($personasList);

                foreach ($personasList as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->Nombre; ?></td>
                        <td><?php echo $value->apellido; ?></td>
                        <td><?php echo $value->Documento; ?></td>
                        <td><?php echo $value->Edad; ?></td>
                        <td align="center"> <a href="?reg=1&id=<?php echo $value->id; ?>">mod</a> </td>
                        <td align="center"> <a href="../sesiones/personasSession.php?del=1&id=<?php echo $value->id; ?>">Elim</a> </td>
                    </tr>
                    <?php
                }
                ?>

            </table>

            <?php
        } else {

            $id = $nombre = $apellido = $documento = $edad = '';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $personasList = $personasControl->listar("WHERE id=$id");
                //var_dump($personasList);

                $nombre = $personasList[0]->Nombre;
                $apellido = $personasList[0]->apellido;
                $documento = $personasList[0]->Documento;
                $edad = $personasList[0]->Edad;
            }
            ?>


            <form action="../sesiones/personasSession.php" method="post" >

                <table border="1" align="center" >
                    <tr>
                        <td>Nombre: </td>
                        <td><input type="text" name="nombre"  value="<?php echo $nombre; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Apellido: </td>
                        <td><input type="text" name="apellido" value="<?php echo $apellido; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Documento: </td>
                        <td><input type="text" name="documento" value="<?php echo $documento; ?>" /> </td>
                    </tr>
                    <tr>
                        <td>Edad: </td>
                        <td><input type="number" name="edad"  value="<?php echo $edad; ?>" min="1" /> </td>
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
