<!--1, Sacar la fecha de hoy, mañana, la hora de ahora, la del próximo Lunes-->
<?php

//echo "La fecha de hoy es " . date("d-m-y", time());
date_default_timezone_set('Europe/Madrid'); //para definir el huso horario
setlocale(LC_ALL, "es_ES");
$today = getdate();
var_dump($today);

//var_dump($today);

echo "La fecha de hoy es $today[mday] del $today[mon] de $today[year]";
echo "<br>";
echo "La fecha de ma&ntildeana es " . ($today['mday']) . " del $today[mon] de $today[year]";
echo "<br>";
echo "La hora actual es " . ($today['hours']) . ":$today[minutes]";
echo "<br>"; 
echo "La fecha del pr&oacuteximo lunes es " . ($today['mday'] + (7 - $today['wday']) + 1) . " del $today[mon] de $today[year]";

?>