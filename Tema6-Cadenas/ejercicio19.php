<html>
    <body>
        <?php
            
            $cadena = "Hola me llamo. jose, y este es mi. templo";
    

            for($i = 0; $i < strlen($cadena); $i++){
                
                if($cadena[$i] == "."){
                    $letra = $cadena[$i + 2];
                    $letra = strtoupper($letra);
                    $cadena = substr_replace($cadena, $letra, $i + 2, 1);
                }
                
                
                
            }
            
            echo $cadena;
            
        ?>
    </body>
</html>