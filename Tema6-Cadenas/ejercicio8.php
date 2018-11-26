<html>
    <body>
        <?php
        
            $frase = "calabacin";
            //inacabalc
            $reverse = "";
            $tamanyo = strlen($frase);
            
            for($i = 0; $i < $tamanyo; $i++) {
                
                if($i == 0){
                    $reverse = $reverse . substr($frase, -($i + 2));
                } else {
                    $reverse = $reverse . substr($frase, -($i + 2), -$i);
                }
                
                $i++;
            }
            
            echo $reverse;
            
        ?>
    </body>
</html>