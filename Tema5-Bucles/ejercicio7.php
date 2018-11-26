<html>
    <body>
        <table border="1">
            <tbody>
                <?php
                    
                    echo "<h1> CON FOR </h1>";
                    $n1 = 1;
                    $m2 = 0;
                    
                    for($i = 1; $i <= 10; $i++) {
                        echo "<tr><td>";
                        $suma = $n1 + $n2;
                        $n1 = $n2;
                        $n2 = $suma;
                        echo "Numero: $suma <br>";
                        echo "</td></tr>";
                    }
                    
                    /*
                    echo "<h1> CON WHILE </h1>";
                    $n1 = 1;
                    $m2 = 0;
                    $i = 1;
                    
                    while($i <= 10) {
                        echo "<tr><td>";
                        $suma = $n1 + $n2;
                        $n1 = $n2;
                        $n2 = $suma;
                        echo "Numero: $suma <br>";
                        echo "</td></tr>";
                        $i++;
                    }
                    
                    echo "<h1> CON DO-WHILE </h1>";
                    $n1 = 1;
                    $m2 = 0;
                    $i = 1;
                    
                    do {
                        echo "<tr><td>";
                        $suma = $n1 + $n2;
                        $n1 = $n2;
                        $n2 = $suma;
                        echo "Numero: $suma <br>";
                        echo "</td></tr>";
                        $i++;
                    } while($i <= 10);
                    */
                ?>
            </tbody>
        </table>
    </body>
</html>