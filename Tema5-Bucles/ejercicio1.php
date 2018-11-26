<html>
    <body>
        <table border="1">
            <tbody>
                <?php
    
                $contador="1";
               
                while ($contador <= 10 ) {
                    echo "<tr><td>";
                    echo "Numero $contador. ";
                    
                    if($contador % 2 == 0) {
                        echo "Es par. ";
                    } elseif ($contador % 2 != 0) {
                        echo "Es impar. ";
                    } 
    
                    //Primos(hermanos XD)
                    $primo = 0;
                    $b = 1;
                    
                    while($b < $contador) {
                        if ($contador % $b == 0) {
                            $primo++;
                        }
                        $b++;
                    }
                    
                    //Comprobacion
                    if ($primo >= 2) {
                        echo "No es primo";
                    } else {
                        echo "Es primo";
                    }
    
                    echo "<br>";
    
                    $contador++;
                    
                    echo "</td></tr>";
                }
               
                ?>
            </tbody>
        </table>
    </body>
</html>