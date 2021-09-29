<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
    <h1>Asignación de letra del DNI</h1>

    <?php

    function printForm(){
    echo<<<END
        <div class="form_div">
        <form action="." method="GET" enctype="application/x-www-form-urlencoded">
            <label for="dni">Introduce tu DNI: </label>
            <input type="text" id="dni" name="dni">
            <input type="submit" name="save">
        </form>
        </div>
END;
    }

    function printAnswer(){
        echo "<div class='form_div'>";
        echo "<p>La letra que le corresponde a tu dni es: " . checkLetterOfDni(). "</p>";
        echo "<button><a href='.'>Volver</a></button>";
        echo "</div>";
    }

    function checkLetterOfDni(){
        $dni_letter = 0;
        $str_letters = "TRWAGMYFPDXBNJZSQVHLCKE";

        $dni_letter_key = $_GET['dni'] % 23;
        $dni_letter = $str_letters[$dni_letter_key];
                
        return $dni_letter;
    }

    if(isset($_GET['dni']) &&  !empty($_GET['dni'])){ 
        printAnswer();
    }else {
        printForm();
    }
    ?>

</body>

</html>