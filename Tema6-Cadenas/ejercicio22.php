<html>
    <body>
            <?php
    
    #################
    #               #
    # Esto es un    #
    # texto de      #
    # prueba        #
    #               #
    #################
    
    
                $tamanyoMax = 10;
                $candena = "Este es un texto de prueba";
                $cadenaT = explode(" ", $candena);
                $tamanyoAc = 0;
                $tamanyoMaxE = $tamanyoMax;
                $cadenaImprimible = "";
                $cont = 0;
                
                printf("<PRE>");
                echo "###################" . "<br>";
                printf("</PRE>");
                    for($i = 0; $i < count($cadenaT); $i++){
                        
                        $tamanyoAc = strlen($cadenaT[$i]);
                        
                        if($tamanyoAc <= $tamanyoMaxE){
                            
                            if(strlen($cadenaImprimible) == 0){
                                $cadenaImprimible = $cadenaT[$i];
                                $tamanyoMaxE = $tamanyoMaxE - $tamanyoAc;
                            } else {
                                $cadenaImprimible = $cadenaImprimible . " " . $cadenaT[$i];
                                $tamanyoMaxE = $tamanyoMaxE - ($tamanyoAc + 1);
                            }
                            
                        } else {
                            $cadenaImprimible = "";
                            
                            if(strlen($cadenaImprimible) == 0){
                                $cadenaImprimible = $cadenaT[$i];
                            } else {
                                $cadenaImprimible = $cadenaImprimible . " " . $cadenaT[$i];
                            }
                            
                            $tamanyoMaxE = $tamanyoMax;
                            
                        }
                        
                        
                        if($tamanyoAc >= $tamanyoMaxE) {
                            
                            printf("<PRE>");
                            echo "# ";
                            echo str_pad($cadenaImprimible, 16, " ", STR_PAD_RIGHT);
                            echo "#";
                            printf("</PRE>");
                        
                            /*
                            $cadenaImprimible = sprintf("# %s", $cadenaImprimible);
                            //Aqui va algo que no se que es pero lo necesitare en un futuro o me acordare entonces.
                            //$cadenaImprimible = sprintf("%-s #", $cadenaImprimible);
                            $cadenaImprimible = str_pad($cadenaImprimible,10," ", STR_PAD_RIGHT);
                            echo "#";
                            echo $cadenaImprimible . "<br>";
                            */
                        }
    
                    //$cadenaImprimible = "";
                        
                        
                    }
                    
    
                printf("<PRE>");
                echo "###################" . "<br>";
                printf("</PRE>");
                
            ?>
    </body>
</html>