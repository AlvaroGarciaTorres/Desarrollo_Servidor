<?php
    echo "<h1>Ejercicio 1</h1>\n";
    echo "<p>Añada el código necesario para que se indique qué cajas han estado en algún momento
    sometidas a una temperatura superior a 4º.</p>\n";
    $temperaturas=array();
    $temperaturas['Caja_1']=array(1,1,2,3,2,1,2,3,3,3,2,1,3,4);
    $temperaturas['Caja_2']=array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
    $temperaturas['Caja_3']=array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
    $temperaturas['Caja_4']=array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
    $temperaturas['Caja_5']=array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

    echo "<ul>\n";
    foreach($temperaturas as $key => $caja){        
        foreach($caja as $valor){
            if($valor>4){
                echo "\t<li>En la $key se ha registrado una temperatura de $valor</li>\n";
            }           
        }
    }
    echo "</ul>\n";

?>
