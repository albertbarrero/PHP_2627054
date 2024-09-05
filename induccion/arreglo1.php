<?php

$arreglo1=array(1,2,3,4,5);
$arreglo=[1,2,3,4,5];

echo $arreglo[4]."<br>";

foreach ($arreglo as $key => $value) {
    echo $key.":".$value."<br>";
}

$edades = [
    "id" => 25,
    "nombre" => "Pablo",
    "direccion" => "Jordan"
];

foreach ($edades as $nombre => $edad) {
    echo "indice: $nombre, Dato: $edad<br>";
}