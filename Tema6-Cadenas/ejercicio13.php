<html>
    <body>
        <?php
            
            //abcdefghijklmnopqrstuvwxyz 
            $cadena = "23A";
            
            if(!strpbrk($cadena, "GHIJKLMNOPQRSTUVWXYZ")) {
                echo hexdec($cadena);
            } else {
                echo "NO";
            }
        ?>
    </body>
</html>