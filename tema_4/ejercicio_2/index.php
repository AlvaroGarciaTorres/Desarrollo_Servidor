<!-- 2. Basándonos en el ejercicio anterior crear las siguientes funciones
de un procesador:
Posiciones nos indica en que posiciones encontramos la palabra a
buscar
Existe nos dirá únicamente si existe o no
Reemplazar nos pide otra palabra para reemplazar por la buscada -->

<?php

include("php/functions.php");

if(!isset($_POST['save'])){
    selectOption();
} else {
    replace($_POST['word_to_search'], $_POST['replace_string'], $_POST['text_to_search']);
}
   

?>