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
    <h1>Comprobación DNI</h1>

    <?php

    function printForm(){
    echo<<<END
        <div class="form_div">
        <form action="." method="GET" enctype="multipart/form-data">
            <label for="dni">Introduce tu DNI: </label>
            <input type="text" id="dni" name="dni">
            <input type="submit" name="save">
        </form>
        </div>
END;
    }

    function printAnswer(){
        echo "<div class='form_div'>";
        checkDni();
        echo "<button><a href='.'>Volver</a></button>";
        echo "</div>";
    }

    function checkDni(){
        $has_a_letter = false;
        $str = $_GET['dni'];
        $length = strlen($str);
        for($i=0; $i<$length; $i++){
            if(!is_numeric($_GET['dni'][$i])){
                echo "<p>La letra de su DNI es " . $_GET['dni'][$i] . "</p>";
                $has_a_letter = true;
            }
        }

        if(!$has_a_letter){
            echo "<p>DNI incorrecto, introduca todos los números y la letra</p>";
        }
        
    }

    if(isset($_GET['save'])){
        printAnswer();
    }else {
        printForm();
    }
    ?>

</body>

</html>