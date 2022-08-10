<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Personas </title>
    </head>
    <body>

        <h1 align="center"> Personas </h1>
            <?php
            
            
            $reg = (isset($_GET['reg']))? $_GET['reg']:'';
            
            if($reg != 1){
            
            ?>

        <table width="90%" align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Edad</th>
                <th>
                    
                    <a href="?reg=1">Nuevo</a>
                    
                </th>
                <th></th>
            </tr>

            <?php
            include_once '../Control/PersonasControl.class.php';
            $PersonasControl = new PersonasControl();
            $PersonasList = $PersonasControl->listar();
            //var_dump($PersonasList);

            foreach ($PersonasList as $key => $value) {
                ?>

                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->Nombre; ?> </td>
                    <td> <?php echo $value->apellido; ?></td>
                    <td><?php echo $value->Documento; ?> </td>
                    <td> <?php echo $value->Edad; ?></td>
                </tr>
                <?php
            }
            ?>



        </table>
        
        <?php
            }else{
         ?>
        Formulario.<br>
           <a href="?">Cancelar</a>  
                
            <?php
            }
            ?>
         
    </body>
</html>
