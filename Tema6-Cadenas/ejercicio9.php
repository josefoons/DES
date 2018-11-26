<html>
    <body>
        <?php
            
            $email = "josefoons@gmail.com";
            
            echo "Correo: " . $email . "<br>";
            if(strstr($email, ".com")) {             
                
                if(substr ($email, -4) == ".com") {
                    echo "SI, todo correcto. Adelante.";
                } else {
                    echo "NO esta al final.";
                }
                
                
            } else {
                echo "NO contiene.";
            }
            
            
        ?>
    </body>
</html>