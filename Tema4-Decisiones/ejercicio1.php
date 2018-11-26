<?php

$horaActual = date ("G");

            if ($horaActual > 01 && $horaActual < 12) {
                echo "Buenos dias";
           } elseif ($horaActual > 13 && $horaActual < 20) {
              echo "Buenos tardes";
           } elseif ($horaActual > 21 && $horaActual < 00) {
               echo "Buenas noches";
           }
?>