<html>
    <body>
        <?php
       
           
            if ( !isset ( $_GET["boton"] ) )
            {
        ?>   
   
        <form action="formularioBase.php" method="get">
            Introduzca su ID:
            <br>
            <input type="number" name="id">
            <br>
            
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
                
                
                
                $id = $_GET['id'];
                $nombre = $_GET['nombre'];
                $sueldo = $_GET['sueldo'];
                
                $colocar = "INSERT INTO clientes3 (ID, nombre, sueldo) VALUES ('$id', '$nombre', '$sueldo');";
                $inserccion = mysqli_query($conn, $colocar);
               
            }
       
        ?>
       
    </body>
</html>
