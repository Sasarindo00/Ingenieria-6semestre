<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <input type="number" names="num01" id="num01" placeholder="Num. 01"/>
        <input type="number" name="num02" id="num02" placeholder="Num. 02"/>
        <br>
        <input type="button" value="Calcular" onclick="calcular()"/>



        <script type="text/javascript">
            function calcular() {
                var num01 = document.getElementById("num01").value;
                var num02 = document.getElementById("num02").value;
                if (num01.length > 0 && num02.length > 0) {
                    num01 = parseInt(num01);
                    num02 = parseInt(num02);

                    var suma = num01 + num02;
                    var texto = "La suma entre " + num01 + " y " + num02 + " es : " + suma;
                    alert(texto);
                } else {
                    alert("Numero 01 y Numero 02 son obligatorios");
                    if (!num01.length > 0) {
                        document.getElementById("num01").style.border = "4px solid red";
                    } else {
                        document.getElementById("num01").style.border = "1px solid";
                    }
                    if (!num02.length > 0) {
                        document.getElementById("num02").style.border = "4px solid red";
                    } else {
                        document.getElementById("num02").style.border = "1px solid";
                    }
                }


            }
        </script>


    </body>       
</html>
