<!--2. Obtener una función que baraja una baraja española
El array de la baraja debe ser global.
También creamos la función seleccionaCartas, que le pasamos cuantas cartas
queremos ver.
Debemos tener dos botones, uno que nos permita verBaraja y otro que nos permite
teclear cuantas cartas queremos ver-->

<?php

function createBaraja(){
    $palos = ["oros", "bastos", "copas", "espadas"];

    for($j = 0; $j<count($palos); $j++){
        for($i = 0; $i<12; $i++){
            $baraja[$palos[$j]][$i] = $i+1 . $palos[$j];
        }
    }
    return $baraja;
}

$baraja = createBaraja();


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
    <h1 class='heading-primary'>
        Juego de cartas
    </h1>
    <body>
        <div class="div-form">
            <span>Elija una de las siguientes opciones: </span><br><br>
            <form action="" method="post">
END;
    if(isset($_POST['select'])){
        echo "<div class='label'>";
        echo "<label for='cardsToView'>Seleccione el número de cartas: </label>";
        echo "<input type='number' id='cardsToView' name='cardsToView'>";
        echo "</div>";
    }

    echo<<<END
                <input class='form-button' type="submit" name="shuffle" value="Barajar">
                <input class='form-button' type="submit" name="view" value="Ver baraja">
                <input class='form-button' type="submit" name="select" value="Seleccionar cartas">
            </form>
        </div>    
    </body>
    </html>
END;
}

function viewDeck($baraja){
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
    <h1 class='heading-primary'>
        Ver barajas
    </h1>
    <body>
END;
    echo "<div class='card-img'>";
    foreach($baraja as $palo){
        for($i = 0; $i<12; $i++){
           // echo "$palo[$i]<br>";
            echo "<img src='img/$palo[$i].jpg'>";
        }
    }
    echo<<<END
        </div>    
    </body>
    </html>
END;
}


if(!isset($_POST['shuffle']) and !isset($_POST['view']) and !isset($_POST['select'])){
    printForm();
    var_dump($_POST);
} else if (isset($_POST['shuffle'])){
    shuffle();
} else if(isset($_POST['view'])){
    viewDeck($baraja);
} else if (isset($_POST['select']) and !isset($_POST['cardsToView'])){
    printForm();
} else if (isset($_POST['select']) and isset($_POST['cardsToView'])){
    selectCards();
}

?>