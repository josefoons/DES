<!DOCTYPE html>
<html>
    <h1>
        <?php
            $variable = "2016";
            $tamanyo = strlen($variable);
            
            if($tamanyo == 4){
                
                if($variable % 4 == 0){
                    echo "Bisiesto";
                } else {
                    echo "No bisiesto";
                }
                
            } else {
               echo "Error en la cadena"; 
            }
        ?>
    </h1>
</html>