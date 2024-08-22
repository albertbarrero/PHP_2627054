<?php 
 
    //phpinfo();

    echo "<h1> Hola Mundo</h1>" . "<br>";

    //Variables
    $nom='Albert';
    $edad = 42;
    $estatura = 1.70;
    $buleano = true;
   
    echo "El dato es: ".$nom."<br>";
    echo gettype($buleano);

    echo "<h1>".$nom."</h1>";

    //Constantes
    define("IVA",0.21);  

    echo"Valor del IVA ".IVA."<br>";


    //Operaciones
    $n1=5;
    $n2=4;

    $suma=$n1+$n2;
    echo "Resta: ".($n1-$n2)."<br>"; //Si va un texto antes la oprecion debe ir entre ()
    echo "La operacion de la Suma es: ".$suma;
    var_dump($suma);
?>

