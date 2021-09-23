<?php
    echo <<<END
    <h1>Ejercicio 3</h1>\n
    <p>Realizar el ejercicio 1 y 2 utilizando Nowdoc o Heredoc</p>\n
    <h2>Ejercicio 1</h2>\n
    END;

    $temperaturas=array();
    $temperaturas['Caja_1']=array(1,1,2,3,2,1,2,3,3,3,2,1,3,4);
    $temperaturas['Caja_2']=array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
    $temperaturas['Caja_3']=array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
    $temperaturas['Caja_4']=array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
    $temperaturas['Caja_5']=array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

    echo <<<END
            <ul>\n
        END;
    foreach($temperaturas as $key => $caja){        
        foreach($caja as $valor){
            if($valor>4){
                echo <<<END
                    \t<li>En la $key se ha registrado una temperatura de $valor</li>\n
                END;
            }           
        }
    }
    echo <<<END
        </ul>\n
        <h2>Ejercicio 2</h2>\n
        <h1>Tablas de multiplicar</h1>\n
        <table style='border-collapse: collapse'>\n
            <tr>\n
        END;
    define('LIMITE', 10);
    define('NUMTABLAS', 10);

    for ($i = 1; $i<=NUMTABLAS; $i++){ 
        echo <<<END
            \t<th style='border: 1px solid #000; padding: 1em; width: 10%;background-color: lightgrey'>Tabla del $i</th>\n
        END;
    }
    echo <<<END
            </tr>\n
        END;
    for ($j = 0; $j<=LIMITE; $j++){
        echo <<<END
                <tr>\n
            END;
        for ($i = 1; $i<=NUMTABLAS; $i++){
            $resultado = $j * $i;
            echo <<<END
                \t<td style='border: 1px solid #000; text-align: center; padding: 1em'>$j x $i = $resultado</td>\n
            END;       
        }
        echo <<<END
            </tr>\n
        END;
    }
    echo <<<END
    </table>\n
    END;
?>