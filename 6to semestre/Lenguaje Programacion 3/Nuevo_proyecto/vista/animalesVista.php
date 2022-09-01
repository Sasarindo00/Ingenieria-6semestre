
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../control/AnimalesControl.class.php';
        $animalesControl = new AnimalesControl();
        
        $animalesList = $animalesControl->listar();
        var_dump($animalesList);
        /*foreach ( $animalesList as $key => $value ){
            echo $key;
        }*/
        ?>
        asdfasdf
    </body>
</html>
