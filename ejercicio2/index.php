<?php
    define('LIMITE', 10);
    define('NUMTABLAS', 10);
    $distancia = 2;
    echo "<h1>Tablas de multiplicar</h1>\n";

    /*for ($i = 1; $i<NUMTABLAS; $i++){
        echo "<h2>Tabla del $i</h2>";
        for ($j = 0; $j<=LIMITE; $j++){
            $resultado = $j * $i;
            echo "<p>$j * $i = $resultado</p>";
        }
    }*/

    for ($i = 1; $i<=NUMTABLAS; $i++){
        
        echo "<table style='border-collapse: collapse; position: absolute; left: $distancia%'>\n";
        echo "<tr>\n";
        echo "\t<th style='border: 1px solid #000; padding: 1em; background-color: lightgrey'>Tabla del $i<th>\n";
        echo "</tr>\n";
        for ($j = 0; $j<=LIMITE; $j++){
            $resultado = $j * $i;
            echo "<tr>\n";
            echo "\t<td style='border: 1px solid #000; padding: 1em'>$j * $i = $resultado</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";
        $distancia += 9;
    }

    /*echo "<table style='border-collapse: collapse'>\n";
    echo "<tr>\n";
    for ($i = 1; $i<=NUMTABLAS; $i++){ 
        echo "\t<th style='border: 1px solid #000; padding: 1em; width: 10%;background-color: lightgrey'>Tabla del $i</th>\n";
    }
    echo "</tr>\n";
    for ($j = 0; $j<=LIMITE; $j++){
        echo "<tr>\n";
        for ($i = 1; $i<=NUMTABLAS; $i++){
            $resultado = $j * $i;
            echo "\t<td style='border: 1px solid #000; text-align: center; padding: 1em'>$j x $i = $resultado</td>\n";       
        }
        echo "</tr>\n";
    }
    echo "</table>\n";*/
?>