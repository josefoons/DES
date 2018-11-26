<html>
    <body>
        <?php
            if ( !isset ( $_POST["boton"] ) ) {
        ?>   
   
        <form action='ejer5.php' method='POST'>
            <input type='text' name='nombre' placeholder='nombre' >
            <input name='coche' type='hidden'>
            <input type='submit' name='boton' value='Enviar'>
        </form>
       
        <?php
            } if(isset($_POST["nombre"])) {
               
        echo "        <form action='ejer5.php' method='POST'>
            <input  type='hidden'name='nombre' value='
            
            ";
            echo isset($_POST['nombre']) ? $_POST['nombre'] : '';
            echo "
            '>
            <input name='coche' type='text'placeholder='coche'>
            <input type='submit' name='boton' value='Enviar'>
        </form>";
        
            } if(isset($_POST["coche"]) && isset($_POST['nombre'])) {
                echo "hola " . $_POST['nombre'];
                echo " con coche " . $_POST['coche'];
            }
        ?>
    </body>
</html>