<html>
    <body>
        <?php
           session_start();
           if (!isset($_SESSION["nombre"])) {
               if ( !isset ( $_POST["boton"] ) ) {
                ?>   
                    <form action="saludo.php" method = "post">
                      
                    Introduzca su nombre:
                    <br>
                    <input type="text" name="logName">
                    <br>
                    <input type="submit" name="boton" value="enviar">
                       
                    </form>
               
                <?php
                    } else {
                        $_SESSION["nombre"] = $_POST["logName"];  
                        header("Refresh:0");
                    }
           } else {
                echo "Hola, ".$_SESSION["nombre"];
           }
        ?>
    </body>
</html>