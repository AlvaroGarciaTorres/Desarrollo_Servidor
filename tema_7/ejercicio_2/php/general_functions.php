<?php

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
    echo "</tr>";
    calendario_mensual($month, $year);   
    echo "</table><br>";
    echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</body>";
    echo "</html>";
}

function printForm(){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="heading-primary">Almanaque</h1>
        <div class="div-form">
            <form action="." method="POST" enctype="multipart/form-data">
                <label for="userMonth">Introduzca el mes: </label>
                <input type="number" name="userMonth" id="userMonth" value="3"><br><br>
                <label for="userYear">Introduzca el año: </label>
                <input type="number" name="userYear" id="userYear" value="2021"><br><br>
                <input type="submit" name="send">
            </form>
        </div>
    </body>
    </html>
END;
}

function printError($str){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="heading-primary">Almanaque</h1>
        <div class="div-form">
            <form action="." method="POST" enctype="multipart/form-data">
                <label for="userMonth">Introduzca el mes: </label>
                <input type="number" name="userMonth" id="userMonth" value="3"><br><br>
                <label for="userYear">Introduzca el año: </label>
                <input type="number" name="userYear" id="userYear" value="2021"><br><br>
                <input type="submit" name="send">
            </form>
            <br>$str;
        </div>
    </body>
    </html>
END;
}

?>