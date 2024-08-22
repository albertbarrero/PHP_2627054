<?php 
$numero = 35; // Supongamos que el usuario ha ingresado este número

/*

$resultado = match($numero) {
    1, 2, 3 => 'A',
    4, 5, 6 => 'B',
    7, 8, 9 => 'C',
    default => 'D',
};*/
/*
$resultado = match(true) {
    $numero >= 1 && $numero <= 10 => 'A',
    $numero >= 11 && $numero <= 40 => 'B',
    $numero >= 41 && $numero <= 100 => 'C',
    default => 'D',
};

echo "El resultado es: $resultado";
*/

$rol = "ADMIN"; // Rol del usuario
$acceso = '';

switch (true) {
    case (strtolower($rol)=="admin"):
        $acceso = "Acceso total";
        break;
    case ($rol=="editor"):
        $acceso = "Acceso limitado a edición de contenido";
        break;
    case ($rol=="viewer"):
        $acceso = "Solo visualización";
        break;
    default:
        $acceso = "Acceso denegado";
        break;
}

echo "Nivel de acceso: $acceso";




?>
