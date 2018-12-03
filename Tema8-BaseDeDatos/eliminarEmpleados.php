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
                //echo "Conexi&oacuten con &eacutexito <br><br>";
           
            if ( !isset ( $_POST["boton"] ) ) {
        ?>   
   
        <form action="eliminarEmpleados.php" method="POST">
            
            Que haces? <br>
           <select name="elegir">    
               <option value="anyadir">Anyadir</option>
               <option value="borrar">Borrar</option>
           </select>
           <hr>
            
            Introduzca su nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            
            Introduzca su sueldo:
            <br>
            <input type="number" name="sueldo">
            <br>
            
            <hr>
            Borrar empleado <br>
             <select type="text" name="empleados">
                <?php
                    $cons = "SELECT * FROM clientes3;";
                    $result = mysqli_query($conn, $cons);
                    while($fila = mysqli_fetch_array($result)){
                        
                        echo "<option value='$fila[0]'> $fila[1] </option>";
                    }
    
                 ?>
            </select>             

            <input type="submit" name="boton" value="ENVIAR">
        </form>
       
        <?php
           
                } else {
                    
                    $opcion = $_POST['elegir'];
                    
                    if( $opcion == "anyadir"){
                        
                    $cons = "SELECT id FROM clientes3 ORDER BY id DESC LIMIT 1;";
                    $result = mysqli_query($conn, $cons);
                    
                    while($fila = mysqli_fetch_array($result)){

                        $id = $fila[0] + 1; 
                        $nombre = $_POST['nombre'];
                        $sueldo = $_POST['sueldo'];
                        
                        $colocar = "INSERT INTO clientes3 (ID, nombre, sueldo) VALUES ('$id', '$nombre', '$sueldo');";
                        $inserccion = mysqli_query($conn, $colocar);
                        
                    } 
                    
                    echo "Anyadido con exito";
    
                } elseif($opcion == "borrar") {
                    
                    $id = $_POST["empleados"];
                    
                    $cons = "DELETE FROM clientes3 WHERE id = '$id';";
                    $result = mysqli_query($conn, $cons);
                    
                    echo "Borrado con exito";
                }
            }
            
            mysqli_close($conn);
        ?>
       
    </body>
</html>
