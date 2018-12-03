<html>
  
    <body>
        <?php

           $name="micookie";
           $value=7; 
           $expires=time()+6000; 
           $path="/";
           $domain="";
           $secure=false;
           $HttpOnly=true;
          
           setcookie ($name,$value,$expires,$path,$domain,$secure,$HttpeOnly);
          
           echo ("Cookie enviada");
          
                                    
        ?>
       
    </body>
   
</html>