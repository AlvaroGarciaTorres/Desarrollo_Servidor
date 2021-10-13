<?php

function printForm(){
    include ("php/variables.php");
    echo<<<END
    <div>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="user_name">Introduzca su nombre: </label>
    <input type="text" id="user_name" name="user_name"><br><br>
    <label for="user_img">Fichero con su fotografía:</label>
    <input type="file" name="user_img" id="user_img"><br><br>
    <span>Introduzca su sexo:</span><br><br>
    <input type='radio' name='user_gender' id='user_gender' value='hombre'>
    <label for='user_gender'> Hombre </label><br><br>
    <input type='radio' name='user_gender' id='user_gender' value='mujer'>
    <label for='user_gender'> Mujer </label><br><br>
    <input type='radio' name='user_gender' id='user_gender' value='NS/NC'>
    <label for='user_gender'> NS/NC </label><br><br>
    <label for="user_age">Introduzca su edad: </label>
            <input type="number" name="user_age" id="user_age" placeholder='31'><br><br>
            <label for="user_birthday">Introduzca su fecha de nacimiento: </label>
            <input type="date" name="user_birthday" id="user_birthday" value='1990-10-09'><br><br>
    <span>Introduzca su nivel en los siguientes idiomas: </span><br><br>
END;
            foreach($languages_array as $language_key => $language){
                echo "<span><b>$language</b></span><br><br>";
                foreach($languages_level_array as $language_level_key => $language_level){
                    if($language_level == "nulo"){
                        echo "<label for='user_languages[]'>Nivel $language_level: </label>";
                        echo "<input type='checkbox' name='user_languages[]' id='user_languages[]' value='$language - $language_level' checked><br><br>";
                    } else{
                        echo "<label for='user_languages[]'>Nivel $language_level: </label>";
                        echo "<input type='checkbox' name='user_languages[]' id='user_languages[]' value='$language - $language_level'><br><br>";
                    }
                }
            }
    echo "<input type='submit' name='save'><br><br>";
    echo "</form>";
    echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</div>";
}

function uploadFile(){
    if(is_uploaded_file($_FILES['user_img']['tmp_name'])){
    $dirName = "img/";
        if($_FILES['user_img']['type'] == "image/jpeg" or $_FILES['user_img']['type'] == "image/gif"){
            if(is_dir($dirName)){ 
                $file_id = time();
                $fileName = $file_id . "-" . $_FILES['user_img']['name'];
                $fullName = $dirName . $fileName;
                move_uploaded_file($_FILES['user_img']['tmp_name'], $fullName);
                echo "<div>";
                echo "<span>Fichero subido con éxito con el nombre $fullName</span><br><br>";
                echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
                echo "</div>";
                printDetails();              
            } else printError("Directorio inexistente"); 
        } else { 
            printError("Vuelva a intentarlo, sólo pueden subirse archivos jpg o gif");
        }
    } else printError("Suba un archivo por favor");    
}

function printDetails(){   
    echo "<div>";
        echo "<h2>Datos personales</h2>";
        echo "<br><br>";
        echo "<span><b>Nombre:</b> $_POST[user_name]</span><br><br>";
        echo "<span><b>Sexo:</b> " . $_POST['user_gender'] . "</span><br><br>";
        echo "<span><b>Edad:</b> $_POST[user_age]</span><br><br>";
        echo "<span><b>Fecha de nacimiento:</b> $_POST[user_birthday]</span><br><br>";
        echo "<span><b>Idiomas:</b></span><br><br>";
        foreach($_POST['user_languages'] as $language){
            echo "<span>$language</span><br><br>";
        }
        echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</div>";
}

function printError($error_message){
    echo "<div>";
    echo "<span>$error_message</span><br><br>";
    echo "<button class='bottom-btn'><a href='.'>Volver</a></button>";
    echo "</div>";
}

?>