<!-- 2. Basándonos en el ejercicio anterior crear las siguientes funciones
de un procesador:
Posiciones nos indica en que posiciones encontramos la palabra a
buscar
Existe nos dirá únicamente si existe o no
Reemplazar nos pide otra palabra para reemplazar por la buscada -->

<?php

include("php/general_functions.php");
include("php/specific_functions.php");

if(!isset($_POST['text_to_search'])){
    printSelectTool();
} else if (empty($_POST['text_to_search'])){
    printError("Introduzca un texto por favor");
} else if(isset($_POST['replace'])){
    replace($_POST['word_to_search'], $_POST['replace_string'], $_POST['text_to_search']);
} else if(isset($_POST['search'])){
    search();
} else printForm($_POST['text_tool']);
   

?>