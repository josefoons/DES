<html>
    <body>
        <?php
       
            # Si no hay una pulsación previa, muestra el formulario
           
            if ( !isset ( $_GET["boton"] ) )
            {
        ?>   
   
        <form action="ejer3.php" method="get">
            Introduzca su nombre:
            <br>
            <input type="text" name="nombre">
            <br>
            
            Introduzca su pass:
            <br>
            <input type="password" name="pass">
            <br>
            
            Sexo:
            <br>
            <input type="radio" name="genero" value="hombre"> hombre<br>
            <input type="radio" name="genero" value="mujer"> mujer<br>
            <br>
            
            Introduzca su passs:
              <select name="select">
                <option value="a">A</option>
                <option value="b">B</option>
              </select>
            
            Selecciona
            <br>
            <input type="checkbox" name="seleccionar" value="Hola" checked>Hola
                
            <br>
            Introduzca cosas:
            <br>
            <textarea rows="4" cols="50" name="textarea"></textarea>
            <br>
            
            <input type="submit" name="boton" value="enviar">
        </form>
       
        <?php
           
            # En caso contrario (es decir, si se ha pulsado antes el botón)...
            }
            else
            {
   
            if(isset ($_GET ["nombre"] )){
                echo "Encantado de conocerte, ";
                echo $_GET["nombre"];
            } else {
                echo "No se ha introducido nombre";
            }
            echo "<br>";
            
            echo "Bonita Password, ";
            echo $_GET["pass"];
            echo "<br>";
            
            echo "Asi que eres? ";
            echo $_GET["genero"];
            echo "<br>";
            
            echo "Que opcion eliges? ";
            echo $_GET["select"];
            echo "<br>";
            
            echo "Me saludas? ";
            echo $_GET["seleccionar"];
            echo "<br>";
            
            echo "Cuentame cosas... ";
            echo $_GET["textarea"];
            echo "<br>";
               
            }
       
        ?>
       
    </body>
</html>
