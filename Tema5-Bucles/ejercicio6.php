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
                    
                    $resultado = 0;
                    
                    for($contador = 1; $contador < 11; $contador++){
                        
                        echo "<tr><th>";
                        echo "Tabla de $contador";
                        echo "</th></td>";
                        echo "</td><td>";
                        
                        
                        for($multi = 1; $multi < 11; $multi++) {
                            $resultado = $contador * $multi;
                            echo "$contador x $multi = $resultado";
                            
                            if($multi != 10) {
                                echo "</td><td>";
                            } else {
                                echo "</td></tr>";
                            }
                        }

                    }

                ?>
            </tbody>
        </table>
    </body>
</html>