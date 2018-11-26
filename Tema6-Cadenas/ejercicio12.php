<html>
    <body>
        <?php
            
            $cadena = "josefoonsgmail.com";
            
            echo (strpbrk($cadena, "@") ? "Si existe el @" : "ERROR 404: @ No encontrado.");
        ?>
    </body>
</html>