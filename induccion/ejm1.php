<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejm1.css">
    <title>Document</title>

</head>
<body>
    <?php

    /*1.	Leer X números enteros, almacenarlos en un vector y determinar en qué posición se encuentra el ultimo número primo con mayor cantidad de dígitos pares.*/

    $prim=0;
    $contprim=0;
    $numeros=[333, 2357];
    $cantPrim=0;
    $pos=0;

    for ($i=0; $i < 2; $i++) { 
        $valor=$numeros[$i];
        $contprim=0;        
            while ($valor > 0) {
                $digito=(int)($valor%10);
                $cont=0;
                for ($j=1; $j <=$digito; $j++) { 
                    if ($digito%$j==0) {
                        $cont++;
                    }
                }
                    if ($cont==2) {
                        $contprim++;
                        echo "Es Primo el digito $digito <br>";
                    }   

                    
                
                $valor=(int)($valor/10);
                
            }
            echo "Cantidad de primos: $contprim <br>";

            if ($contprim>=$cantPrim) {
                $cantPrim=$contprim;
                $pos=$i;
            }
        
        
    }
    echo "El numero con mas primos esta en la posicion: $pos  y tiene $cantPrim digitos primos";

    ?>
</body>
</html>