<!DOCTYPE html>
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
<html>
    <body>
        <table border="1">
            <tbody>
                <?php
                    
                    $contador = 0;
                    $multi = 1;
                    $resultado = 0;
                    
                    do {
                        
                        $multi = 0;
                        //$contador = 0;
                        
                        echo "<tr><th>";
                        echo "Tabla de $contador";
                        echo "</th></td>";
                        echo "</td><td>";
                        
                        do {
                            
                            $resultado = $contador * $multi;
                            echo "$contador x $multi = $resultado";
                            
                            if($multi != 10) {
                                echo "</td><td>";
                            } else {
                                echo "</td></tr>";
                            }
                            $multi++;
                        } while ($multi < 11);
                        
                        $contador++;
                    } while ($contador < 11);
                ?>
            </tbody>
        </table>
    </body>
</html>