<html>
    <body>
        <?php
            
            $cadena = "Este @ es muy @ siendo el mismo muy @";
            
            echo substr_replace ($cadena, "arroba", 5, 1). "<br>";
            
        ?>
    </body>
</html>