<html>
    <body>
        <?php
                if (isset($_COOKIE["micookie"])) {
                    echo "Hola, ";
                    echo $_COOKIE["micookie"];
                }  else {
                    
                    if ( !isset ( $_GET["boton"] ) ) {
                ?>   
           
                    <form action="saludoCookie.php" method = "get">
                      
                    Introduzca su nombre:
                    <br>
                    <input type="text" name="nombre">
                    <br>
                    <input type="submit" name="boton" value="enviar">
                       
                    </form>
               
                <?php
                    } else {
                    
                   $name="micookie";
                   $value=$_GET["nombre"]; 
                   $expires=time()+600; 
                   $path="/";
                   $domain="";
                   $secure=false;
                   $HttpOnly=true;
                   setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpeOnly);
                  
                   echo ("Cookie enviada");
                }
            }
       
        ?>
       
    </body>
</html>
