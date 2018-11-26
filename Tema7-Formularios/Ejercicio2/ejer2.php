<html>
    <body>
        <?php
        
            if(!empty ($_POST ["nombre"])){
                echo "Encantado de conocerte, ";
                echo $_POST["nombre"];
            } else {
                echo "No se ha introducido nombre";
            }
            echo "<br>";
            
            echo "Bonita Password, ";
            echo $_POST["pass"];
            echo "<br>";
            
            echo "Asi que eres? ";
            echo $_POST["genero"];
            echo "<br>";
            
            echo "Que opcion eliges? ";
            echo $_POST["select"];
            echo "<br>";
            
            echo "Me saludas? ";
            echo $_POST["seleccionar"];
            echo "<br>";
            
            echo "Cuentame cosas... ";
            echo $_POST["textarea"];
            echo "<br>";
        ?>
    </body>
</html>