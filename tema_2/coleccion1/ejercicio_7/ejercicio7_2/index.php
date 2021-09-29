<!--Realizar el ejercicio 2 mejorado con dos versiones:
2) Realizar un html donde nos presenta un pequeño formulario en el que nos pide
que tabla queremos ver. Por un método Get le pasamos la tabla que deseamos
ver y en otro php nos visualiza dicha tabla
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
        echo "<table>";
        echo "<tr>";
        echo "\t\t<th class='blue'>Tabla del $userNumber</th>\n";          
        echo "\t</tr>\n";
        for($i=0; $i<=LIMIT; $i++){
            $result = $i * $userNumber;
            echo "<tr>";
            echo "<td class='white'>$userNumber x $i = $result</td>";
            echo "</tr>";
        }
        echo "\t</table>\n";
        echo "\t<br>\n\t<br>\n";
    }

    if(isset($_GET['user_table'])){
        $userNumber = $_GET['user_table'];
        echo "<div class='get'>\n";
        if($userNumber == null or $userNumber < 0){
            echo "\t<span>Por favor introduce una tabla válida</span>\n\t<br>\n\t<br>\n";
        }else createTable($userNumber);
        echo "<button><a href='.'>Volver</a></button>";
        echo "</div>";
    }else {
       echo<<<END
        <div class="form_div">
            <form action="." method="GET" enctype="application/x-www-form-urlencoded">
                <label for="table">Selecciona una tabla: </label>
                <input type="number" id="table" name="table"><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
END;
    }
    ?>
</body>

</html>