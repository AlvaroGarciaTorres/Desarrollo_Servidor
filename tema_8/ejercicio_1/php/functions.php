<?php

function printForm(){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body style="background-color:lightblue">
    <h1>Log In</h1>
    <div style="background-color:white">
        <img src="img/user.jpg" style="width:200px"><br><br>
        <form class="edited" action="." method="POST" enctype="">
            <label for="user_id">ID: </label>
            <input type="text" id="user_id" name="user_id"><br><br>

            <label for="user_password">Contraseña: </label>
            <input type="password" id="user_password" name="user_password"><br><br>
            <input type="submit" name="check">
        </form>
    </div>  
    </body>
    </html>
END;
}


function authenthicate(){
    include("php/variables.php");

    if($_POST['user_password'] == $user_passwords_array[$_POST['user_id']]){
        echo "si";
    } else header("Refresh: 10; url=$_SERVER[PHP_SELF]");
}

?>
