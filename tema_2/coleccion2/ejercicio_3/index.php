<!--3.	Realizar una función que devuelve el factorial del número que le pasamos comoparámetro.
Debemos hacerun programa principal utilizando dicha función.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="../../css/index.css">
</head>
<body>
    <h1>Máquina de hacer factoriales</h1>
    <?php

    function printForm(){
        echo<<<END
        <div>
            <form action="." method="GET" enctype="application/x-www-form-urlencoded">
                <label for="user_number">Introduce un número</label>
                <input type="number" name="user_number" id="user_number">
                <input type="submit" name="save">
            </form>
        </div>
END;
    }

    function printResult(){
        $userNumber = $_GET['user_number'];
        echo "<div>";
            echo "<span>El factorial de $userNumber!: </span><br>";
            echo printFactorial($userNumber);
            echo "<br><br>";
            echo "<button><a class='btn' href='.'>Volver</a></button><br>";
        echo "</div>";
    }

    function printFactorial($n){
        if($n == 1){
            echo "<span>$n = </span>";
            return 1;
        }else{
            echo "<span>$n * </span>";
            return $n * printFactorial($n-1);
        }
    }

    if(!isset($_GET['user_number']) || $_GET['user_number'] <= 0){
        printForm();
        echo "<br><br>";
        echo "<button class='bottom-btn'><a href='..'>Atrás</a></button>";
    }else{      
        printResult();
    }
    ?>   
</body>
</html>