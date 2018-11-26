<html>
    <head>
        <style>
            
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }        
            
        </style>
    </head>
  
    <body>
        <?php
            $servidor = "localhost"; # Puede ser una IP o un nombre DNS
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            $consulta = "SELECT * FROM clientes";
            $result = mysqli_query($conn, $consulta);
            
            echo "<table>";
            
            while ($fila = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $fila[0] . "</td>";
                echo "<td>" . $fila[1] . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
           
            mysqli_free_result($result);
           
            mysqli_close($conn);
                                    
        ?>
       
    </body>
   
</html>