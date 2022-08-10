<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../Control/animalesControl.class.php';
        $animalesControl = new animalesControl();
        
        $animalesList = $animalesControl ->listar();
        var_dump($animalesList);
        /*foreach($animalesList as $key => $value){
            echo $value->
            echo '<br>';
        }*/
        ?>
    </body>
</html>
