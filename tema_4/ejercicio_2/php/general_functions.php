<?php



/*function search_recur($needle, $haystack, $position){
    $ocurrences_array = [];
    $next_position = strpos($haystack, $needle, $position);
    echo $next_position;
    if($next_position === false){
        return [];
    }
    return array_merge($ocurrences_array, search_recur($needle, $haystack, $next_position++));
}*/

function printSelectTool(){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
    <h1>Editor de textos</h1>
    <div>
        <form action="." method="post" enctype="multipart/form-data">
            <span>Seleccione la herramienta a usar: </span><br><br>
            
            <input type="radio" name="text_tool" id="search" value="search">
            <label for="search">Buscar </label><br><br>
            
            <input type="radio" name="text_tool" id="replace" value="replace">
            <label for="replace">Buscar y reemplazar </label><br><br>
            
            <label for="text_to_search">Introduzca el texto en el que buscar: </label><br>
            <textarea name="text_to_search" id="text_to_search" cols="60" rows="10">Doña Uzeada de Ribera Maldonado de Bracamonte y Anaya era baja, rechoncha, abigotada. Ya no existia razon para llamar talle al suyo. Sus colores vivos, sanos, podian mas que el albayalde y el soliman del afeite, con que se blanqueaba por simular melancolias. Gastaba dos parches oscuros, adheridos a las sienes y que fingian medicamentos. Tenia los ojitos ratoniles, maliciosos. Sabia dilatarlos duramente o desmayarlos con recato o levantarlos con disimulo.</textarea><br><br>
            <input type="submit" name="save" id="save">
        </form> 
    </div> 
    <br><br>
    <button class='bottom-btn'><a href='..'>Atrás</a></button>      
    </body>
    </html>
END;  
}

function printOcurrences($edited_text){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
    <h1>Búsqueda de palabras</h1>
    <div>
        <form action="." method="post" enctype="multipart/form-data">
            <label for="word_to_search">Palabra a buscar: </label><br>
            <input type="text" id="word_to_search" name="word_to_search" value="$_POST[word_to_search]"><br><br>
            <label for="replace_string">Palabra de reemplazo: </label><br>
            <input type="text" id="replace_string" name="replace_string" value="$_POST[replace_string]"><br><br>
            <label for="text_to_search">Texto en el que buscar: </label><br>
            <textarea name="text_to_search" id="text_to_search" cols="60" rows="10">$edited_text</textarea><br><br>
        </form> 
        <br><br>
        <button class='bottom-btn'><a href='.'>Volver</a></button> 
    </div> 
    <br><br>
    <button class='bottom-btn'><a href='..'>Atrás</a></button>      
    </body>
    </html>
END;
}


function printForm($text_tool){
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
END;
    if($text_tool == "replace"){
        echo<<<END
        <h1>Buscar y reemplazar</h1>
        <div>
            <form action="." method="post" enctype="multipart/form-data">
                <label for="word_to_search">Introduzca la palabra a buscar: </label><br>
                <input type="text" id="word_to_search" name="word_to_search"><br><br>
                <label for="replace_string">Introduzca la palabra de reemplazo: </label><br>
                <input type="text" id="replace_string" name="replace_string"><br><br>
                <label for="text_to_search">Texto en el que buscar: </label><br>
                <textarea name="text_to_search" id="text_to_search" cols="60" rows="10">$_POST[text_to_search]</textarea><br><br>
                <input type="submit" name="replace" id="replace">
            </form> 
            <br><br>
            <button class='bottom-btn'><a href='.'>Volver</a></button>
        </div>
END;
    } else if ($text_tool == "search"){
        echo<<<END
        <h1>Búsqueda de palabras</h1>
        <div>
            <form action="." method="post" enctype="multipart/form-data">
                <label for="word_to_search">Introduzca la palabra a buscar: </label><br>
                <input type="text" id="word_to_search" name="word_to_search"><br><br>
                <label for="text_to_search">Texto en el que buscar: </label><br>
                <textarea name="text_to_search" id="text_to_search" cols="60" rows="10">$_POST[text_to_search]</textarea><br><br>
                <input type="submit" name="search" id="search">
            </form> 
            <br><br>
            <button class='bottom-btn'><a href='.'>Volver</a></button> 
        </div>
END;
    }
 
    echo "<br><br>";
    echo "<button class='bottom-btn'><a href='..'>Atrás</a></button>"; 
    echo "</body>";
    echo "</html>";
}

function printError($error_message){  
    echo<<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
    <h1>Editor de textos</h1>
    <div>
END;  
    echo "<span>$error_message</span><br><br>";
    echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</div>";
    echo "<br><br>";
    echo "<button class='bottom-btn'><a href='..'>Atrás</a></button>"; 
    echo "</body>";
    echo "</html>";
}


?>