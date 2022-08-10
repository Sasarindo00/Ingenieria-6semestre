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

        <textarea name="area" id="area" onkeyup="mientrasEscribo()"> </textarea>
        
        <div id="divTexto"> </div>
        
        <script type="text/javascript">
            
            function mientrasEscribo() {
                var texto = document.getElementById("area").value;
                document.getElementById("divTexto").innerHTML = texto;
            }
        </script>
    </body>
</html>
