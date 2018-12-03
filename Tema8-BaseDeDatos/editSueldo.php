<html>
    <body>
        <?php
            $servidor = "localhost"; 
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";
            
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito <br><br>";
           
            $consulta = "SELECT * FROM clientes2";
          
            $result = mysqli_query($conn, $consulta);
           
            while ($fila = mysqli_fetch_array($result)) {
                
                $aumento = ($fila[2] + ($fila[2] * 10)/100);
                
                
                $colocar = "UPDATE clientes2 SET sueldo = $aumento";
                $inserccion = mysqli_query($conn, $colocar);

               
            }
           
            mysqli_free_result($result);
           
            mysqli_close($conn);
                                    
        ?> 
        
    </body>
    
</html>
