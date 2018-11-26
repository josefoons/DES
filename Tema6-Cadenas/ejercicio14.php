<html>
    <body>
        <?php
                
            $cadena = "192.168.7.114";      
            $contador = 0;
            $esIP = true;
            echo $cadena . "<br>";
            
            for($i = 0; $i < strlen($cadena); $i++){
                if(substr($cadena, -$i, 1) == "."){
                    $contador++;
                }
            }
                
            if($contador == 3 && !strpbrk($cadena, "!·$%&/()=?¿_:;>|@#~½¬{[]}\,·̣}{]^+*+-/€@ł€¶ŧ←↓→øþ~łŋđðßæ«»¢“”nµ,·}][|@\ºª[")){
                $arrayNumero = explode(".", $cadena);
                
                for($p = 0; $p < count($arrayNumero); $p++){
                   
                   if($arrayNumero[$p] < 0 || $arrayNumero[$p] > 255){
                       $esIP = false;
                   }
                   
                }
            
                if($esIP){
                    echo "Si es una IP válida.";
                } else {
                    echo "No es una IP válida.";
                }
            } else {
                echo "No es una IP válida.";
            }
        ?>
    </body>
</html>