<!--4. Vamos a realizar un formulario que nos permite incluir el nombre y
apellidos de una persona y nos visualiza su imagen. Para ello habremos
guardado las imágenes con el nombre y apellidos de la persona , junto con
la fecha-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Ejercicio 4</h1>

    <?php
    
    include ("php/functions.php");
    
    if(!isset($_POST['register']) and !isset($_POST['search'])){
        printForm();
    } else if(isset($_POST['register']) and empty($_POST['user_name']) or isset($_POST['search']) and empty($_POST['search_user_name'])){
        printError("Introduzca su nombre por favor");
    } else if(isset($_POST['search'])){
        searchImg();
    } else {
        uploadFile();
    }
    
    ?>

    <br><br>
    <button class='bottom-btn'><a href='..'>Atrás</a></button>

</body>
</html>