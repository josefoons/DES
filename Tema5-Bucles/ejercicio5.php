<html>
    <body>
        <table border="1">
            <tbody>
                <?php
                
                for ($contador=1; $contador <= 10; $contador++) {

                    echo "<tr><td>";
                    echo "Numero $contador. ";
                    
                    if($contador % 2 == 0) {
                        echo "Es par. ";
                    } elseif ($contador % 2 != 0) {
                        echo "Es impar. ";
                    } 
    
                    //Primos(hermanos XD)
                    $primo = 0;
                    
                    
                    for ($b = 1; $b < $contador; $b++) {
                        if ($contador % $b == 0) {
                            $primo++;
                        }
                    }
                    
                    //Comprobacion
                    if ($primo >= 2) {
                        echo "No es primo";
                    } else {
                        echo "Es primo";
                    }
    
                    echo "<br>";
    
                    
                    
                    echo "</td></tr>";
                }
               
                ?>
            </tbody>
        </table>
    </body>
</html>