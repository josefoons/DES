<!DOCTYPE html>
<html>
    <h1>
        <?php
            $frase = "Murcielago";
            $tamanyo = strlen($frase);
            
            
            for($i = 0; $i < $tamanyo; $i++){
                if($frase[$i] == "a"){
                    $frase[$i] = "e";
                } elseif($frase[$i] == "e"){
                    $frase[$i] = "i";
                } elseif($frase[$i] == "i"){
                    $frase[$i] = "o";
                } elseif($frase[$i] == "o"){
                    $frase[$i] = "u";
                } elseif($frase[$i] == "u"){
                    $frase[$i] = "a";
                } 
            }
            
            echo "Codificado: " . $frase . "<br>";
            
            for($i = 0; $i < $tamanyo; $i++){
                if($frase[$i] == "e"){
                    $frase[$i] = "a";
                } elseif($frase[$i] == "i"){
                    $frase[$i] = "e";
                } elseif($frase[$i] == "o"){
                    $frase[$i] = "i";
                } elseif($frase[$i] == "u"){
                    $frase[$i] = "o";
                } elseif($frase[$i] == "a"){
                    $frase[$i] = "u";
                } 
            }        
            
            echo "Descodificado: " . $frase;
        ?>
    </h1>
</html>