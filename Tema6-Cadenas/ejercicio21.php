<html>
    <body>
        <?php

            $cadena = "Hola";
            
            $cadena = sprintf("# %s", $cadena);
            $cadena = sprintf("%-s #", $cadena);
        
            echo $cadena;
            
        ?>
    </body>
</html>