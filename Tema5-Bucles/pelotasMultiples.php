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
            $horientacion1 = 0;
            $horientacion2 = 0;
            $comprobacionInicial = false;
            $comprobacionInicial1 = false;
            $comprobacionInicial2 = false;
           
           
            # Posicionar la pelota
           
            do
            {
                $pelotaX = rand (0,$tamañoMapa-1);
                $pelotaY = rand (0,$tamañoMapa-1);
                $pelotaX1 = rand (0,$tamañoMapa-1);
                $pelotaY1 = rand (0,$tamañoMapa-1);
                $pelotaX2 = rand (0,$tamañoMapa-1);
                $pelotaY2 = rand (0,$tamañoMapa-1);
                
                #comproacion bordes.
                if($pelotaX == 0 || $pelotaY == 0 || $pelotaX == 9 || $pelotaY == 9){
                }else{
                    if($pelotaY <= $pelotaX){
                        
                    }else{
                        $comprobacionInicial = true;
                    }
                }
                
                if($pelotaX1 == 0 || $pelotaY1 == 0 || $pelotaX1 == 9 || $pelotaY1 == 9){
                }else{
                    if($pelotaY1 <= $pelotaX1){
                        
                    }else{
                        $comprobacionInicial1 = true;
                    }
                }
                
                if($pelotaX2 == 0 || $pelotaY2 == 0 || $pelotaX2 == 9 || $pelotaY2 == 9){
                }else{
                    if($pelotaY2 <= $pelotaX2){
                        
                    }else{
                        $comprobacionInicial2 = true;
                    }
                }
                
                
                
                
                
            } while ($comprobacionInicial == false || $comprobacionInicial1 == false || $comprobacionInicial2 == false) ;
           
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
               
               //--------------------------------------
               
               if($horientacion1 == 0) {
                   
                   if($pelotaY1 == 9 ) {
                       $horientacion1 = 1;
                       $rebotes++;
                   } else {
                       $pelotaX1++;
                       $pelotaY1++;
                   }
               }
               
                 if($horientacion1 == 1){
                   
                   if($pelotaX1 == 9) {
                       $horientacion1 = 2;
                       $rebotes++;
                   } else {
                       $pelotaX1++;
                       $pelotaY1--;
                   }
               }
                 
                   if($horientacion1 == 2){
                   
                   if($pelotaY1 == 0){
                       $horientacion1 = 3;
                       $rebotes++;
                   } else {
                       $pelotaX1--;
                       $pelotaY1--;
                   }
               }  
                 
                     if($horientacion1 == 3) {
                   
                   if($pelotaX1 == 0){
                       $horientacion1 = 0;
                       $rebotes++;
                   } else {
                       $pelotaX1--;
                       $pelotaY1++;
                   }
               }
               
                //--------------------------------------
               
               if($horientacion2 == 0) {
                   
                   if($pelotaY2 == 9 ) {
                       $horientacion2 = 1;
                       $rebotes++;
                   } else {
                       $pelotaX2++;
                       $pelotaY2++;
                   }
               }
               
                 if($horientacion2 == 1){
                   
                   if($pelotaX2 == 9) {
                       $horientacion2 = 2;
                       $rebotes++;
                   } else {
                       $pelotaX2++;
                       $pelotaY2--;
                   }
               }
                 
                   if($horientacion2 == 2){
                   
                   if($pelotaY2 == 0){
                       $horientacion2 = 3;
                       $rebotes++;
                   } else {
                       $pelotaX2--;
                       $pelotaY2--;
                   }
               }  
                 
                     if($horientacion2 == 3) {
                   
                   if($pelotaX2 == 0){
                       $horientacion2 = 0;
                       $rebotes++;
                   } else {
                       $pelotaX2--;
                       $pelotaY2++;
                   }
               }
               

                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                       
                      
                       if ($x == $pelotaX && $y == $pelotaY)  {
                            echo '<span class="pelota">A</span>'; #pelota
                        } elseif($x == $pelotaX1 && $y == $pelotaY1) {
                            echo '<span class="pelota">B</span>'; #pelota
                        }
                        elseif($x == $pelotaX2 && $y == $pelotaY2) {
                            echo '<span class="pelota">C</span>'; #pelota
                        }
                        else {
                            echo '<span class="aire">.</span>'; #Aire
                        }
                       
                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                   
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "<div class = numeros></pre>
                pelotaX=$pelotaX pelotaY=$pelotaY
                pelotaX1=$pelotaX1 pelotaY1=$pelotaY1
                pelotaX2=$pelotaX2 pelotaY2=$pelotaY2  Rebotes=$rebotes</div></div>\n";
                
            } while ($rebotes < 6);
          
            ?>   
           
        </h1>
       
    </body>

</html>
