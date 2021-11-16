<?php

function setUserCookies(){
    $url = $_SERVER['PHP_SELF'];
    setcookie("language", $_POST['user_language'], time() + 5);
    setcookie("textColor", $_POST['user_color'], time() + 5);
    setcookie("backgroundColor", $_POST['user_bcolor'], time() + 5);
    header("Location: $url");
}

function printForm(){
    global $nameLanguage, $passwordLanguage;
    $name = $nameLanguage[$_COOKIE['language']];
    $password = $passwordLanguage[$_COOKIE['language']];
    $textColor = $_COOKIE['textColor'];
    $backgroundColor = $_COOKIE['backgroundColor'];
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio cookies</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 style="color: $backgroundColor; background-color: $textColor">Log In</h1>
        <div style="color: $textColor; background-color: $backgroundColor">
            <form action="." method="post" enctype="application/x-www-form-urlencoded">
                <label for="user_name">$name: </label>
                <input type="text" name="user_name" id="user_name"><br><br>
                <label for="user_password">$password: </label>
                <input type="text" name="user_password" id="user_password"><br><br>
                <input type="submit" name="check">
            </form>
        </div>
    </body>
    </html>
END;
}

?>