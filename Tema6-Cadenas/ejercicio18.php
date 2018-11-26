<html>
    <body>
        <?php
            
            $cadena = "VaLeNcia";
            
            echo "Antes: " . $cadena . "<br>";
            
            $cadena = strtolower ($cadena);
            $cadena = ucfirst($cadena);
            
            echo "Despues: " . $cadena;

            
        ?>
    </body>
</html>