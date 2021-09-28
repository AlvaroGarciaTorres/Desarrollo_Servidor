<!--. Realizar un programa php, con una página autoprocesada donde nos pide el nombre
de un mes y en función del mes que tecleamos nos pinta un calendario del mes con
los días que correspondan. Nota:Utilizar un switch -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 tanda 2</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <?php

    function printForm(){
        echo<<<END
        <h1>Selección de calendario</h1>
        <div class="form_div">
            <form action="." method="GET" enctype="multipart/form-data">
                <label for="user_month">Introduzca el mes: </label>
                <input type="text" name="user_month" id="user_month"><br><br>
                <label for="user_year">Introduzca el año: </label>
                <input type="text" name="user_year" id="user_year"><br><br>
                <input type="submit" name="save">
            </form>
        </div>
END;
    }
    
    function printTable(){
        
        echo "<h1>Calendario de " . $_GET['user_month'] . "</h1>";
        echo<<<END
        <div class="table_div">
        <br>
        <table>
            <tr>
                <th class="blue">Lunes</th>
                <th class="blue">Martes</th>
                <th class="blue">Miércoles</th>
                <th class="blue">Jueves</th>
                <th class="blue">Viernes</th>
                <th class="blue">Sábado</th>
                <th class="blue">Domingo</th>
            </tr>
END;
        /*printDays();*/
        printDays(checkMonth());
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<button><a href='.'>Volver</a></button>";
        echo "</div>";
        
    }

    function printDays($days){
        $weeks = $days/7;
        $last_week = $days%7;
        $day = 0;
        for($i=1; $i<=$weeks; $i++){
            echo "<tr>";
            for($j=1; $j<=7; $j++){
                $day += 1;
                echo "<td class='white'>$day</td>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        while($last_week > 0){
            $day += 1;
            echo "<td class='white'>$day</td>";
            $last_week -=1;
        } 
        echo "</tr>";       
    }

    function checkMonth(){
        switch ($_GET['user_month']){
            case "Enero":
                $dias = 31;
                break;
            case "Febrero":
                $dias = checkLeapYear();
                break;
            case "Marzo":
                $dias = 31;
                break;
            case "Abril":
                $dias = 30;
                break;
            case "Mayo":
                $dias = 31;
                break;
            case "Junio":
                $dias = 30;
                break;
            case "Julio":
                $dias = 31;
                break;
            case "Agosto":
                $dias = 31;
                break;
            case "Septiembre":
                $dias = 30;
                break;
            case "Octubre":
                $dias = 31;
                break;
            case "Noviembre":
                $dias = 30;
                break;
            case "Diciembre":
                $dias = 31;
                break;
        }
        return $dias;
    }
    
    function checkLeapYear(){
        if(is_numeric($_GET['user_year'])){

        }
    }

    if(isset($_GET['save']) && $_GET['user_month'] != "" /*&& $_GET['user_year'] != ""*/){
        printTable();
    }else {
        printForm();
    }
    ?>

</body>

</html>