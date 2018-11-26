<html>
  
    <body>
        <?php
            $servidor = "localhost";
            $username = "miusuario";
            $password = "mipassword";
            $basedatos = "bdprueba";

            # Crear conexión
            $conn = mysqli_connect($servidor, $username, $password, $basedatos);

            # Comprobar conexión
            if (!$conn) {
                die("Conexi&ocacuten fallida: " . mysqli_connect_error());
            }
            echo "Conexi&oacuten con &eacutexito";
           
            # Cerrar la conexión es una buena práctica, para liberar recursos
            # inmediatamente, pero si no se pone, no pasa nada porque PHP
            # cierra la conexión automáticamente al salir:
           
            mysqli_close($conn);
                                    
        ?>
       
    </body>
   
</html>