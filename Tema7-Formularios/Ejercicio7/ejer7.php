<html>
    <body>
        <?php
           
            if ( $_GET["nombre"] != "") {
                
                header ( "Location: ejer7_ganador.html");
                exit;
                
            } else {
                
                header ( "Location: ejer7.html");
                exit;
                
            }   
           
        ?>
    </body>
</html>