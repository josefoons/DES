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
            $horientacion = 0;
            $comprobacionInicial = false;
           
           
            # Posicionar la pelota
           
            do
            {
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
                
                #comproacion bordes.
                if($pelotaX == 0 || $pelotaY == 0 || $pelotaX == 9 || $pelotaY == 9){
                }else{
                    if($pelotaY <= $pelotaX){
                        
                    }else{
                        $comprobacionInicial = true;
                    }
                }
                
                
                
                
                
            } while ($comprobacionInicial == false) ;
           
            do {
               if($horientacion == 0) {
                   
                   if($pelotaY == 9 ) {
                       $horientacion = 1;
                       $rebotes++;
                   } else {
                       $pelotaX++;
                       $pelotaY++;
                   }
               }
               
                 if($horientacion == 1){
                   
                   if($pelotaX == 9) {
                       $horientacion = 2;
                       $rebotes++;
                   } else {
                       $pelotaX++;
                       $pelotaY--;
                   }
               }
                 
                   if($horientacion == 2){
                   
                   if($pelotaY == 0){
                       $horientacion = 3;
                       $rebotes++;
                   } else {
                       $pelotaX--;
                       $pelotaY--;
                   }
               }  
                 
                     if($horientacion == 3) {
                   
                   if($pelotaX == 0){
                       $horientacion = 0;
                       $rebotes++;
                   } else {
                       $pelotaX--;
                       $pelotaY++;
                   }
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
                
            } while ($rebotes < 6);
          
            ?>   
           
        </h1>
       
    </body>

</html>
