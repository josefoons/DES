<html>
    <head>
        <style type="text/css">
            h1 {
                font-family: fantasy;
                float: left;
                display: inline-block;
                margin-left: 40%;
                margin-top: 20%;
            }
        </style>
    </head>
    
    <body>
       
        <h1>
            <?php

            $horaActual = date ("g:i:s d/m/Y");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo "La hora actual es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>
</html>