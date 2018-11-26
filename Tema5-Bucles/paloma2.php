<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa=10;
           
            # Posicionar la paloma
           
            do
            {
                $palomaX = rand (0,$tamañoMapa-1);
                $palomaY = rand (0,$tamañoMapa-1);
                $gorrionX = rand (0,$tamañoMapa-1);
                $gorrionY = rand (0,$tamañoMapa-1);
            } while ((abs($gorrionX-$palomaX)<$tamañoMapa/2)||(abs($gorrionY-$palomaY)<$tamañoMapa/2)&&(abs($palomaX-$gorrionX)<$tamañoMapa/2)||(abs($palomaY-$gorrionY)<$tamañoMapa/2));
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           
            do
            {
                #Acercar la paloma a su casa
                if ($palomaX<$gorrionX)
                    $palomaX++;
               
                elseif ($palomaX>$gorrionX)
                    $palomaX--;
               
               
                if ($palomaY<$gorrionY)
                    $palomaY++;
                elseif ($palomaY>$gorrionY)
                    $palomaY--;
                    
                #Acercar la paloma a su casa
                if ($gorrionX<$palomaX)
                    $gorrionX++;
               
                elseif ($gorrionX>$palomaX)
                    $gorrionX--;
               
               
                if ($gorrionY<$palomaY)
                    $gorrionY++;
                elseif ($gorrionY>$palomaY)
                    $gorrionY--;

                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $palomaX && $y == $palomaY)
                        {
                            echo '<span class="paloma">%</span>'; #Paloma
                        }
                        elseif ($x == $gorrionX && $y == $gorrionY)
                        {
                            echo '<span class="paloma">@</span>'; #gorrion
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>palomax=$palomaX palomaY=$palomaY\n";
                echo "</pre>gorrionx=$gorrionX gorriony=$gorrionY</div>\n";
            } while (($palomaX != $gorrionX || $palomaY != $gorrionY) && ($gorrionX != $palomaX || $gorrionY != $palomaY ));
          
            ?>   
           
        </h1>
       
    </body>

</html>