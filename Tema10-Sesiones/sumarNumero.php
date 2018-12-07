<html>
    <body>
        <?php
           session_start();
           
               if ( !isset ( $_POST["boton"] ) ) {
                ?>   
                    <form action="sumarNumero.php" method = "post">
                      
                    Introduzca su numero:
                    <br>
                    <input type="number" name="numero">
                    <br>
                    <input type="submit" name="boton" value="enviar">
                       
                    </form>
               
                <?php
                    } else {
                        $_SESSION["almacen"] = $_SESSION["almacen"] . "#" .$_POST["numero"];  
                        header("Refresh:0");
                    }
           
           if (!isset($_SESSION["almacen"])) {
                //NADA
           } else {
                echo $_SESSION["almacen"];
           }
        ?>
    </body>
</html>