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
           
            $consulta = "SELECT * FROM clientes";
          
            $result = mysqli_query($conn, $consulta);
           
            while ($fila = mysqli_fetch_array($result)) {
                
                $colocar = "UPDATE clientes2 SET sueldo = 10000";
                //$colocar = "INSERT INTO clientes2 (ID, nombre, sueldo) VALUES ('$fila[0]', '$fila[1]', 10000);";
                $inserccion = mysqli_query($conn, $colocar);

            }
           
            mysqli_free_result($result);
           
            mysqli_close($conn);
                                    
        ?> 
        
    </body>
    
</html>
