<html>
    <body>
        <table border="1">
            <tbody>
                <?php
                    $contador="1";
            
                    do {
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
                        do {
                           if ($contador % $b == 0) {
                                $primo++;
                            }
                            $b++;
                        } while ($b < $contador);

                        //Comprobacion
                        if ($primo >= 2) {
                            echo "No es primo";
                        } else {
                            echo "Es primo";
                        }
        
                        echo "<br>";
        
                        $contador++;
                        
                        echo "</td></tr>";
                
                   } while($contador <= 10);
                ?>
            </tbody>
        </table>
    </body>
</html>