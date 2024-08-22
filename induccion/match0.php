<?php

$comida="yogurt";

$respuesta=match ($comida) {
     "Carne"   => "Proteina", 
     "Yogurt"  => "Lacteo",
     "Manzana" => "Fruta",
     default   => "No existe"
};

echo "es: ".$respuesta;
?>