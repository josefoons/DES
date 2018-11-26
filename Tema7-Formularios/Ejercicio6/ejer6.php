<html>
    <body>
        <?php
         
         
           if($_POST["album"] == "1"){
               
                move_uploaded_file ( $_FILES["archivo1"]["tmp_name"], "./album1/" . $_FILES["archivo1"]["name"]);
                
                
           } elseif ($_POST["album"] == "2"){
               
                move_uploaded_file ( $_FILES["archivo1"]["tmp_name"], "./album2/" . $_FILES["archivo1"]["name"]);
            
                
           }
           
        ?>
    </body>
</html>
