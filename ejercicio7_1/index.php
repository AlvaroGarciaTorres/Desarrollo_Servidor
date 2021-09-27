<!--Realizar el ejercicio 2 mejorado con dos versiones:
1) Una en la que tendremos 10 enlaces con 10 números y según linkemos en uno u
otro nos presenta en otro php esa tabla de multiplicar (href)
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" type="text/css" href="css/index.css?v=<?php echo(rand()); ?>">
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
</head>

<body>
    <h1>Seleccionador de tabla de multiplicar</h1>
    
    <?php
    define('LIMIT',10);
    
    function createTable($userNumber){
        $result = 0;       
        echo<<<END
        \t<table>
            <tr>\n
        END; 
        echo "\t\t<th class='blue'>Tabla del $userNumber</th>\n";          
        echo "\t</tr>\n";
        for($i=0; $i<=LIMIT; $i++){
            $result = $i * $userNumber;
            echo<<<END
            \t<tr>
                \t<td class='white'>$userNumber x $i = $result</td>
            \t</tr>\n
            END;
        }
        echo "\t</table>\n";
        echo "\t<br>\n\t<br>\n";
    }

    if(isset($_GET['table'])){
        $userNumber = $_GET['table'];

        echo "<div class='get'>\n";
        createTable($userNumber);
        echo<<<END
            <button><a href='.'>Volver</a></button>
            </div>
        END;
    }else {
       echo<<<END
        <div class="links_div">
            <table>
                <tr>
                    <th class="blue">Tablas</th>
                </tr>
        END;
        for ($i=1; $i<=LIMIT; $i++){
            echo "<tr>";
            echo "<td class='white'><a href='index.php?table=$i'>Tabla del $i</a></td>";
            echo "</tr>";
        }
        echo<<<END
            </table>
        </div>
       END;
    }
    ?>
</body>

</html>