<html>
    <body>
        <?php
       
 
           
            if ( !isset ( $_GET["boton"] ) )
            {
        ?>   
   
        <form action="formularioBaseIncremento.php" method="get">

            
            Introduzca su nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            
            Introduzca su sueldo:
            <br>
            <input type="number" name="sueldo">
            <br>

            
            <input type="submit" name="boton" value="enviar">
        </form>
       
        <?php
           
            } else {
   
                $servidor = "localhost"; 
                $username = "miusuario";
                $password = "mipassword";
                $basedatos = "bdprueba";
                
                $conn = mysqli_connect($servidor, $username, $password, $basedatos);
    
                if (!$conn) {
                    die("Conexi&ocacuten fallida: " . mysqli_connect_error());
                }
                echo "Conexi&oacuten con &eacutexito <br><br>";
                
                $cons = "SELECT id FROM clientes3 ORDER BY id DESC LIMIT 1;";
                $result = mysqli_query($conn, $cons);
                
                while($fila = mysqli_fetch_array($result)){
                    
                    $id = $fila[0] + 1;
                    $nombre = $_GET['nombre'];
                    $sueldo = $_GET['sueldo'];
                    
                    $colocar = "INSERT INTO clientes3 (ID, nombre, sueldo) VALUES ('$id', '$nombre', '$sueldo');";
                    $inserccion = mysqli_query($conn, $colocar);
                }
                

               
            }
       
        ?>
       
    </body>
</html>
