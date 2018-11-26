<?php

    $primero = 1;
    $segundo = 1;
    
    
    echo (++$primero > $segundo++)? "Primero mayor":"Segundo mayor"; 
    echo "<br>";
    echo (++$primero < $segundo++)? "Primero mayor":"Segundo mayor";
    echo "<br>";
    echo (++$primero != $segundo++)? "Son diferentes":"Son iguales";
    

?>