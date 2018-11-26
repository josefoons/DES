<html>
    <body>
        <?php
            
            $ip = "192.168.10.13";
            $ipTroceada = explode(".", $ip);
            $mascara = "255.255.255.0";
            $mascaraTroceada = explode(".", $mascara);
            $ipBinaria;
            $mascaraBinaria;
            $resultado;
            
            for($i = 0; $i < count($ipTroceada); $i++){
                $ipTroceada[$i] = sprintf("%b.", $ipTroceada[$i]);
                $mascaraTroceada[$i] = sprintf("%b.", $mascaraTroceada[$i]);
            }
            
            for($i = 0; $i < count($ipTroceada); $i++){
                if($i == 0){
                    $ipBinaria = $ipBinaria . sprintf("%08d.", $ipTroceada[$i]);
                    $mascaraBinaria = $mascaraBinaria . sprintf("%08d.", $mascaraTroceada[$i]);
                } elseif($i == count($ipTroceada) - 1) {
                    $ipBinaria = $ipBinaria . sprintf("%08d", $ipTroceada[$i]);
                    $mascaraBinaria = $mascaraBinaria . sprintf("%08d", $mascaraTroceada[$i]);
                } else {
                    $ipBinaria = $ipBinaria . sprintf("%08d.", $ipTroceada[$i]);
                    $mascaraBinaria = $mascaraBinaria . sprintf("%08d.", $mascaraTroceada[$i]);
                }
            }
            
            for($i = 0; $i < strlen($ipBinaria); $i++){
                
                if($ipBinaria[$i] == ".") {
                    $resultado = $resultado . ".";
                } else {
                    if($ipBinaria[$i] == 1 && $mascaraBinaria[$i] == 1) {
                        //true
                        $resultado = $resultado . "1";
                    } elseif($ipBinaria[$i] != 1 || $mascaraBinaria[$i] != 1) {
                        //false
                        $resultado = $resultado . "0";
                    } 
                }
            }
            
            echo "IP: " . $ip . "<br>";
            echo "Binaria IP: ". $ipBinaria . "<br>";
            echo "Mascara: ". $mascara . "<br>";
            echo "Mascara Binaria: ". $mascaraBinaria . "<br>";
            echo "Resultado: " . $resultado;
            
        ?>
    </body>
</html>