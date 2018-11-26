<!DOCTYPE html>
<html>
    <h1>
        <?php
            $frase = "Ma lastra la patata";
            $tamanyo = strlen($frase);
            
            
            for($i = 0; $i < $tamanyo; $i++){
                if($frase[$i] == "a"){
                    $frase[$i] = "e";
                }
            }
            
            echo $frase;
        ?>
    </h1>
</html>