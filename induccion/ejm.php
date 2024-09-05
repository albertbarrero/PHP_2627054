<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejm.css">
    <title>Document</title>
</head>
<body>
    
<?php

// $a=0;
// while ($a <= 3) {
//     echo '<label for="">Label'.$a.' <label>';
//     echo '<input type="text" placeholder="dato: '. $a .'"> <br>';
//     if ($a==2) {
//         break;
//     }
//     $a++;
// }

// for ($i=0; $i < 4; $i++) { 
//     echo  '<p id="linea'.$i.'">Espacio '. $i .'</p>';
// }



// $fib1 = 0;
// $fib2 = 1;

// // Imprimimos los primeros dos números
// echo $fib1 . ", " . $fib2;

// // Mientras que el siguiente número de la serie sea menor o igual a 1000
// while (true) {
//     $fib3 = $fib1 + $fib2;

//     // Si el siguiente número sobrepasa 1000, salimos del ciclo
//     if ($fib3 > 1000) {
//         break;
//     }

//     // Imprimimos el siguiente número de la serie
//     echo ", " . $fib3;

//     // Actualizamos los valores para el siguiente cálculo
//     $fib1 = $fib2;
//     $fib2 = $fib3;
// }
$numero=20;
$cantidad_digitos = 0;
$numero_temp = 20;

// Validamos que el usuario haya ingresado un número válido
if (is_numeric($numero)) {
    echo "Los dígitos del número $numero son: ";

    // Ciclo while para contar los dígitos y mostrar cada uno de ellos
    while ($numero_temp != 0) {
        // Obtenemos el último dígito
        $digito = $numero_temp % 10;

        // Imprimimos el dígito
        echo $digito . " ";

        // Eliminamos el último dígito del número
        $numero_temp = (int)($numero_temp / 10);

        // Incrementamos el contador de dígitos
        $cantidad_digitos++;
    }

    echo "\nEl número $numero tiene $cantidad_digitos dígitos.";
} else {
    echo "Por favor, ingresa un número válido.";
}

?>



</body>
</html>

