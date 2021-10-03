<!--2.	Vamos realizar un juego para que los alumnos de primaria estudien los verbos irregulares de Inglés.
El programa mostrará el verbo en español y  tendremos tres caja de texto para teclear las tres formas verbales. 
Existirá un botón para finalizar cuando deseemos.
Cuando finaliza el juego te muestra una estadística de aciertos, fallos, cantidad de preguntas hechas, etc.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php

    $verbs_array = ["Ir", "Dormir", "Venir", "Comer", "Beber"];
    $base_form_array = ["go", "sleep", "come", "eat", "drink"];
    $past_simple_array = ["went", "slept", "came", "ate", "drank"];
    $past_participle_array = ["gone", "slept", "come", "eaten", "drunk"];

    function printForm($verbs_array){        
        echo "<div>";
       
        foreach($verbs_array as $verb){
            echo "<span>Verb: <b>$verb</b></span><br><br>";
            echo<<<END
            <form action="." method="POST" enctype="application/x-www-form-urlencoded">
                <label for="base_form[]">Base form: </label>
                <input type="text" name="base_form[]" id="base_form[]"><br><br>
                <label for="past_simple[]">Past simple: </label>
                <input type="text" name="past_simple[]" id="past_simple[]"><br><br>
                <label for="past_participle[]">Past participle: </label>
                <input type="text" name="past_participle[]" id="past_participle[]"><br><br>
END;
        }
        echo "<input type='submit' name='check_answers' value='Corregir'>";
        echo "</form>";
        echo "</div>";
        echo "<br><br>";
        echo "<button class='bottom-btn'><a href='..'>Atrás</a></button>";
    }

    function checkAnswers($verbs_array, $base_form_array, $past_simple_array, $past_participle_array){
        $right_answers = 0;
        foreach($base_form_array as $key => $base_form){
            if($base_form == $_POST['base_form'][$key]){
                $right_answers += 1;
            }
        }
        foreach($past_simple_array as $key => $verb){
            if($verb == $_POST['past_simple'][$key]){
                $right_answers += 1;
            }
        }
        foreach($past_participle_array as $key => $verb){
            if($verb == $_POST['past_participle'][$key]){
                $right_answers += 1;
            }
        }
        printStatistics($right_answers, count($verbs_array)*3);
    }

    function printStatistics($right_answers, $number_of_questions){
        $wrong_answers = $number_of_questions - $right_answers;
        echo "<div>";
        echo "<span>Aciertos: $right_answers</span><br><br>";
        echo "<span>Fallos: $wrong_answers</span><br><br>";
        echo "<span>Nº de preguntas: $number_of_questions</span><br><br>";
        echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
        echo "</div>";
    }

    if(!isset($_POST['check_answers'])){
        printForm($verbs_array);
    } else {
        checkAnswers($verbs_array, $base_form_array, $past_simple_array, $past_participle_array);
    }
    ?>
</body>
</html>