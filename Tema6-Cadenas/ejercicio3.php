<html>
    <h1>
        <?php
        
        $frase = "esta frase";
        $otra = " ";
        $tamanyo = strlen($frase);
        
        echo $frase . "<br>";
        
        for($i = 0; $i < $tamanyo; $i++){
            $otra[$i] = $frase[($tamanyo - $i) - 1];
        }
        
        echo $otra;
        
        ?>
    </h1>
</html>