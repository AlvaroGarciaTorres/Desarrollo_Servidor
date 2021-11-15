<?php

var_dump(file_get_contents("package.json"));

$json = file_get_contents("package.json");

var_dump(json_decode($json, true));

$myarray = json_decode($json, true);

echo $myarray['scripts']['watch'];

?>