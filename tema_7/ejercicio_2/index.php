<!--2.Escribir la función calendario_mensual en calendario_ funciones.php, que reciba el año y el mes
como argumentos, y cree una tabla con la representación de ese mes, como si fuera una página
de un almanaque. En la primera fila aparecerá el nombre del mes, en la segunda los nombres de
los días de la semana abreviados (L, M, X, J, V, S y D) y, en las siguientes, los números de los
días-->

<?php

$week = ["L", "M", "X", "J", "V", "S", "D"];
$monthsName = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

function getFirstDayPosition($month, $year){
    $firstDayInfo = getdate(mktime(12, 30, 0, $month, 1, $year)); 
    return $firstDayInfo['wday'];
}

function getMonthDays($month, $year){
    return date("t", mktime(0, 0, 0, $month, 1, $year));
}

function printMonth($month, $year){
    global $week;
    global $monthsName;
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
END;
    echo "<h1 class='heading-primary'>Calendario de " . $monthsName[$month - 1] . "</h1>";

    echo "<table class='calendar'>";
    echo "<tr>";
    for($i = 0; $i < 7; $i++){
        echo "<th>$week[$i]</th>";
    }
    calendario_mensual($month, $year);
    echo "</tr>";
    echo "</table><br>";
    echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</body>";
    echo "</html>";
}

function calendario_mensual($month, $year){
    $counterDaysPerWeek = 0;       
    $dayNumber = 1 - getFirstDayPosition($month, $year);
    $positionInCalendar = 0;
    while($positionInCalendar < getMonthDays($month, $year)){
        $counterDaysPerWeek += 7;
        echo "<tr>";
        while($positionInCalendar < $counterDaysPerWeek){
            if($dayNumber >= 0 and $dayNumber < 31){
                echo "<td>".($dayNumber + 1)."</td>";
            } else echo "<td></td>";
            $positionInCalendar++;
            $dayNumber++;
        }
    }
    echo "</tr>"; 
}

function getMonthDisposition($month, $year){
    $monthDisplay['numberOfWeeks'] = (getMonthDays($month, $year) + getFirstDayPosition($month, $year) - 1)/7;
    $monthDisplay['lastDays'] = (getMonthDays($month, $year) + getFirstDayPosition($month, $year) - 1)%7;
    return $monthDisplay;
}


function viewCalendar(){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="heading-primary">Almanaque</h1>
        <div class="div-form">
            <form action="POST" enctype="multipart/form-data">
                <label for="userMonth">Introduzca el mes: </label>
                <input type="number" name="userMonth" id="userMonth"><br><br>
                <label for="userYear">Introduzca el año: </label>
                <input type="number" name="userYear" id="userYear"><br><br>
                <input type="submit" name="send">
            </form>
        </div>
    </body>
    </html>
END;
}
viewCalendar()
//printMonth(12, 2021);
?>