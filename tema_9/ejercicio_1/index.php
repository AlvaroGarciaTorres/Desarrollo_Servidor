<!--1. Realizar una función para generar una matriz de 20*20 con 400 números
aleatorios que no estén repetidos. Utilizar dicha función en un programa
principal-->

<?php

function createRandomArray($arraySize, $minValue, $maxValue){
    $randomArray = [];
    for($i = 0; $i<$arraySize; $i++){
        $number = rand($minValue, $maxValue);
        while(in_array($number, $randomArray)){
            $number = rand($minValue, $maxValue);
        }
        $randomArray[$i] = $number;
    }
    return $randomArray;   
}

function printForm(){
    
}

function printArray($array, $cols, $rows){
    //imprimir el array dando el formato 20x20
}

if(isset()){
    $new_array = createRandomArray(400, 0, 400);
    printArray($new_array, 20, 20);
}


?>