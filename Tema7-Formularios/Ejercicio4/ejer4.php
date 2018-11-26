<html>
   
    <body>
       
        <?php
            echo "<form action='ejer4.php' method='POST'>
                <input type='number' name='primerNumero'>
                <select name='operacion'>
                    <option value='sumar'>+</option>
                    <option value='restar'>-</option>
                    <option value='dividir'>/</option>
                    <option value='multiplicar'>*</option>
                 </select>
                <input type='number' name='segundoNumero'>
                <input type='submit' name='boton' value='Calcular'>
            </form>";
           
            if ( isset ( $_POST["boton"] ) ){
                
                $numeroUno = $_POST["primerNumero"];
                $segundoNumero = $_POST["segundoNumero"];
                $operacion = $_POST["operacion"];
                $resultado = 0;
                
                if($operacion == "sumar"){
                    $resultado = $numeroUno + $segundoNumero;
                } elseif($operacion == "restar"){
                    $resultado = $numeroUno - $segundoNumero;
                } elseif($operacion == "dividir") {
                    $resultado = $numeroUno / $segundoNumero;
                } elseif($operacion == "multiplicar") {
                    $resultado = $numeroUno * $segundoNumero;
                }
               
               echo "Resultado de operacion: " . $resultado;
            }
       
        ?>
       
    </body>
</html>
