<html>
    <body>
        <?php
            
            $email = "josefoons@gmail.com";
            $comprobar = substr(strstr($email, "@"), 0, 1);
            echo "Email: " . $email . "<br>";
            //echo $comprobar;
            
            
            if($comprobar == "@") {
                
                $pos = strpos($email, "@");
                $primero = substr($email, 0, $pos);
                $segundo = substr($email, $pos + 1);
                
                echo $primero . "<br>";
                echo $segundo;
                
                
            } else {
                echo "No puedo hacer nada.";
            }
        
        ?>
    </body>
</html>