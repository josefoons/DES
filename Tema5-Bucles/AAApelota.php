    <html>
        <head>
            <title>
                Simulador de rebotes
            </title>
            <link rel="stylesheet" type="text/css" href="common.css" />
            <style type="text/css">
                div.map {
                    float:left;
                    text-align: center;
                    border: 1px solid #666;
                    background-color: #fcfcfc;
                    margin: 5px;
                    padding: 1em;
                }
                span.pelota {
                    font-weight: bold;
                    color: red;
                }
                
                span.aire {
                    color: blue;
                }
                   
                .numeros{
                    font-size:20px;
                }
            </style>
        </head>
        <body>
           
            <h1>
                <?php
    
                $tamañoMapa=10;
                $rebotes = 0;
                $divi = $tamañoMapa-1/2;
               
               
                # Posicionar la pelota
                
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
                
                                
                    /**
                     * Y = 0 Arriba 
                     * Y = 9 Abajo
                     * X = 9 Derecha
                     * X = 0 Izquida
                    */
                
               if($pelotaX < $tamañoMapa-1 && $pelotaX > $divi){
                   $tocaX = true;
               } else {
                   $tocaX = false;
               }
               
               if($pelotaY < $tamañoMapa-1 && $pelotaY > $divi){
                   $tocaY = true;
               } else {
                   $tocaY = false;
               }
               
                do {
                    
                    if($pelotaY == $tamañoMapa-1){
                        $tocarY = true;
                        $rebotes++;
                    } elseif($pelotaY == 0){
                        $tocarY = false;
                        $rebotes++;
                    }
                    
                    if($pelotaX == $tamañoMapa-1){
                        $tocarX = true;
                        $rebotes++;
                    } elseif($pelotaX == 0){
                        $tocarX = false;
                        $rebotes++;
                    }
    
                    if($tocaY == false){
                        $pelotaY--;
                    } elseif($tocarY == true) {
                        $pelotaY++;
                    }
                    
                    if($tocaX == false){
                        $pelotaX--;
                    } elseif($tocarX == true) {
                        $pelotaX++;
                    }
    
                    #Mostrar el mapa actual
                    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
                   
                    for ($y=0; $y<$tamañoMapa; $y++)
                    {
                        for ($x=0; $x<$tamañoMapa; $x++)
                        {
                           
                          
                           if ($x == $pelotaX && $y == $pelotaY)
                            {
                                echo '<span class="pelota">O</span>'; #pelota
                            }
                            else
                            {
                                echo '<span class="aire">.</span>'; #Aire
                            }
                           
                            echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                        }
                       
                        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                    }
                   
                    echo "<div class = numeros></pre>pelotaX=$pelotaX pelotaY=$pelotaY  Rebotes=$rebotes</div></div>\n";
                    
                    $rebotes++;
                } while ($rebotes < 10);
              
                ?>   
               
            </h1>
           
        </body>
    
    </html>
