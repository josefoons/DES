    <!DOCTYPE html>
    <html>
    <head>
        <style>
            table {     
                font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
                font-size: 12px;    
                margin: 45px; 
                text-align: left;    
                border-collapse: collapse; 
                
            }
    
            th {     
                font-size: 13px;     
                font-weight: normal;     
                padding: 8px;     
                background: #b9c9fe;   
                color: #039; 
                
            }
    
            td {    
                padding: 8px;     
                background: #e8edff;     
                border-bottom: 1px solid #fff;
                color: #669;    
                border-top: 1px solid transparent; 
                
            }
    
            tr:hover td { 
                background: #d0dafd; 
                color: #339; 
                
            }
        </style>
    </head>
    <body>
            <table border="1">
                <tbody>
        <?php
      /**  
          <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
        */
        echo "<tr>";

            $frase = "camion";
            $frase = strtolower($frase);
            
            $tamanyo = strlen($frase);
            $cont = 0;
            
            for($i = 97; $i <= 122; $i++) {
                        echo "<th>" . chr($i) . "</th>";
                $cont = 0;
                
                for($p = 0; $p < $tamanyo; $p++){
                    
                    if($frase[$p] == chr($i)){
                        $cont++;
                    }
                }
                echo "<th>" . $cont . "</th>";
                echo "</tr>";
            }
            
            
        ?>
                </tbody>
            </table>
    </body>
    </html>