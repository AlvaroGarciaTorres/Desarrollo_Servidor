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
    $isItSet = isset($_GET['user_table']);
    
    function createTable($userNumber){
        $result = 0;  
        echo "<div class='get'>";     
        echo "<table>";
        echo "<tr>"; 
        echo "<th class='blue'>Tabla del $userNumber</th>";          
        echo "</tr>";
        for($i=0; $i<=LIMIT; $i++){
            $result = $i * $userNumber;
            echo "<tr>";
            echo "<td class='white'>$userNumber x $i = $result</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>\n\t<br>";
        echo "<button><a href='.'>Volver</a></button>";
        echo "</div>";
    }
    
    if($isItSet){
        $userNumber = $_GET['user_table'];   
        createTable($userNumber);
    }else {
       echo "<div class='links_div'>";
       echo "<table>";
       echo "<tr>";
       echo "<th class='blue'>Tablas</th>";
       echo "</tr>";
        for ($i=1; $i<=LIMIT; $i++){
            echo "<tr>";
            echo "<td class='white'><a href='index.php?user_table=$i'>Tabla del $i</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>

</html>