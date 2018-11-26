<!DOCTYPE html>
<html>
    <h1>
        <?php
            $frase = "alcachofa";
            $tamanyo = strlen($frase);
            $total = "";
            $par = true;
            
            
            if($tamanyo % 2 != 0) {
                $par = false;
            }
            
            
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
            
            
            if($par == true) {
                for($i = 0; $i < $tamanyo; $i++){
                    
                    if($i % 2 == 0){
                        $total = $total . $frase[$i + 1];
                    } elseif($i % 2 != 0) {
                        $total = $total . $frase[$i - 1];
                    }
                    
                }
                
            } elseif($par == false) {
                
                for($i = 0; $i < $tamanyo + 1; $i++){
                    
                    if($i % 2 == 0){
                        $total = $total . $frase[$i + 1];
                    } elseif($i % 2 != 0) {
                        $total = $total . $frase[$i - 1];
                    }
                    
                }
            }


            
            echo "Codificado: " . $total . "<br>";
            
            if($par == true) {
                for($i = 0; $i < $tamanyo; $i++){
                    
                    if($i % 2 == 0){
                        $desco = $desco . $total[$i + 1];
                    } elseif($i % 2 != 0) {
                        $desco = $desco . $total[$i - 1];
                    }
                    
                }
            } elseif($par == false) {
                for($i = 0; $i < $tamanyo + 1; $i++){
                    
                    if($i % 2 == 0){
                        $desco = $desco . $total[$i + 1];
                    } elseif($i % 2 != 0) {
                        $desco = $desco . $total[$i - 1];
                    }
                    
                }
            }
            
            for($i = 0; $i < $tamanyo; $i++){
                if($desco[$i] == "e"){
                    $desco[$i] = "a";
                } elseif($desco[$i] == "i"){
                    $desco[$i] = "e";
                } elseif($desco[$i] == "o"){
                    $desco[$i] = "i";
                } elseif($desco[$i] == "u"){
                    $desco[$i] = "o";
                } elseif($desco[$i] == "a"){
                    $desco[$i] = "u";
                } 
            }        
            
            echo "Descodificado: " . $desco;
        ?>
    </h1>
</html>