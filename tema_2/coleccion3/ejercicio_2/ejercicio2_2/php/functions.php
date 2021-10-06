<?php

function printForm($right_answers, $wrong_answers, $total_answers){ 
        global $verbs_array;
        echo $url = $_SERVER['PHP_SELF'] . "?right=$right_answers&wrong=$wrong_answers&total=$total_answers";
        $total_answers++;
        echo "<div>";
        echo "<span>Verb: <b>".$verbs_array[$total_answers]['spanish_form']."</b></span><br><br>";
        echo<<<END
        <form action="$url" method="POST" enctype="application/x-www-form-urlencoded">
            <label for="user_answer[]">Base form: </label>
            <input type="text" name="user_answer[]" id="user_answer[]"><br><br>
            <label for="user_answer[]">Past simple: </label>
            <input type="text" name="user_answer[]" id="user_answer[]"><br><br>
            <label for="user_answer[]">Past participle: </label>
            <input type="text" name="user_answer[]" id="user_answer[]"><br><br>
END;
        /*if(checkAnswers()){
            $right_answers++;
        } else $wrong_answers++;*/

        $total_answers++;
        $url = $_SERVER['PHP_SELF'] . "?right=$right_answers&wrong=$wrong_answers&total=$total_answers";
 
        echo "<input type='submit' name='next_answer' value='Next'>";
        echo "<input type='submit' name='check_answers' value='Check'>";
        echo "</form>";
        echo "</div>";
        echo "<br><br>";
        echo "<button class='bottom-btn'><a href='..'>Back</a></button>";
    }

    /*function checkAnswers(){
        global $verbs_array;
        for($i = 1; $i<3; $i++){
            return $verbs_array[0][$i] == "go";
        }
    }

    function printStatistics($right_answers, $number_of_questions){
        $wrong_answers = $number_of_questions - $right_answers;
        echo "<div>";
        echo "<span>Aciertos: $right_answers</span><br><br>";
        echo "<span>Fallos: $wrong_answers</span><br><br>";
        echo "<span>Nº de preguntas: $number_of_questions</span><br><br>";
        echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
        echo "</div>";
    }*/

    ?>