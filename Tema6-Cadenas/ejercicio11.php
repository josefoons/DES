<html>
    <body>
        <?php
            
            $cadena = "el el cacaelcaca";
            
            while(strstr($cadena, "el")){
                
                $posicion = strpos($cadena, "el");
                
                $cadena0 = substr($cadena, 0, $posicion);
                $cambio = "the";
                $cadena1 = substr($cadena, $posicion + 2);
                
                $cadena = $cadena0 . $cambio . $cadena1;
            }
            
            echo $cadena;
            
            
            
            
            
        ?>
    </body>
</html>