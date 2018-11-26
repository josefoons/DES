<html>
    <body>
        <?php
            
            $cadena = <<< END
            Lorem ipsum dolor sit amet, consectetuer <br> Lorem ipsum dolor sit amet, consectetuerconsectetuer <br> porque es guay.<br> 
END;

            //echo "Antes: " . "<br>" . $cadena . "<br>" . "------------------------------" . "<br>";
            
                
            $tamanyoLineas = 40;
            $copiaTamanyo = $tamanyoLineas;
            $cadena = str_replace ("<br>", "", $cadena);
            $cadena = str_replace (" ", '!\s+!', $cadena);
            
            
            echo "Despues quitar BR: " . "<br>" . $cadena . "<br>" . "------------------------------" . "<br>";
            
            
            for($i = 0; $i < strlen($cadena); $i++){
                
                if($i == $tamanyoLineas + 1) {
                    
                    
                    $cadena = substr_replace($cadena, "<br>", $i, 0);
                    
                    //echo $cadena;
                    
                    $tamanyoLineas = $tamanyoLineas + $copiaTamanyo;
                }
                
            }
            
            echo $cadena;
            
        ?>
    </body>
</html>