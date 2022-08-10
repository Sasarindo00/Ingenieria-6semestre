
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="text" name="texto01" id="texto01" onkeyup="verifica()" />
        <input type="text" name="texto02" id="texto02" onkeyup="verifica()" />
         
         <p id="texto"></p>
        
        
        <script type="text/javascript">
            
            function verifica() {
                var t01 = document.getElementById("texto01").value;
                var t02 = document.getElementById("texto02").value;
                if(t01 === t02){
                    document.getElementById("texto").style.color="blue";
                    document.getElementById("texto").innerHTML="Son iguales";
                }else{
                    document.getElementById("texto").style.color="red";
                    document.getElementById("texto").innerHTML="Son diferentes";
                }
            }
        </script>
    </body>
</html>