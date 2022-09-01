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

        <img src="../imagen/apple.png" id="img01" onmouseover="alPasarMouse()" onmouseout="alSalirMouse()"/>
        <script type="text/javascript">
            function alPasarMouse() {
                document.getElementById("img01").src = "../imagen/apple.png";
            }
            function alSalirMouse() {
                document.getElementById("img01").src = "../imagen/vector.png";
            }
        </script>
    </body>
</html>
