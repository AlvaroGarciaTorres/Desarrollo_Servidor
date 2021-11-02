<!--4. Realizar un programa para visualizar los horarios de los ciclos del IES Zayas que
aparecen en la web. Los ciclos los tendremos en un array que le pasamos a la
función array_walk o array_map y obtendrá una serie de enlaces que cuando los
pulsamos nos permiten ver el horario. Los periodos de clases se los debe
inventar el alumno-->

<?php

$grades = ["DAW", "DAM", "ASIR"];
$horas = ["08:30", "9:25", "10:20", "11:40", "12:35", "13:30"];

function createArray($subject){
    $grade = file("txt/$subject.txt");
    for($i = 0; $i<count($grade); $i++){
        $grade[$i] = explode(" ", $grade[$i]);
    }
    return $grade;
    
}

function printPage(){
    global $grades;
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class='heading-primary'>
            Horarios ciclos IES ZAYAS
        </h1>
        <div class="gradesTimetables">
            <table class="timetable">
END;

foreach($grades as $grade){
    printTimetables(createArray($grade));
    echo "<br><br>";
}

echo<<<END
</table>
</div>   
</body>
</html>
END;
}

function printTimetables($grade){
    global $horas;
    echo "<table class='timetable'>";
    echo "<tr>";
    echo "<th>Hora</th>";
    for($i = 0; $i<count($grade); $i++){
        echo "<th>".$grade[$i][0]."</th>";
    }
    echo "</tr>";
    
    for($j = 0; $j<count($horas); $j++){
        echo "<tr>";
        echo "<td>".$horas[$j]."</td>";
        for($i = 0; $i<count($grade); $i++){           
            echo "<td>".$grade[$i][$j + 1]."</td>";
        }
        echo "</tr>";
    }  
    echo "</table>";
}

printPage();


?>