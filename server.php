<?php

// Prelevare dati dal file
$string = file_get_contents("dischi.json");
//var_dump($string)

$discList = json_decode($string, true);
//var_dump($discList);


$json = json_encode(($discList));

header("Content-type: application/json");
echo $json;
?> 