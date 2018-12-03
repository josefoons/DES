<html>
  
    <body>
        <?php
          
            if (isset($_COOKIE["micookie"]))
            {
                echo "La cookie se ha devuelto al servidor y su valor es: ";
                echo $_COOKIE["micookie"];
            }  
            else
                echo "La cookie no se ha devuelto";                       
        ?>
       
    </body>
   
</html>