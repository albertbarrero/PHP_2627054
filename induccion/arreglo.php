<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de 30 Datos</title>
</head>
<body>
    <h2>Ingrese 10 datos:</h2>
    <form action="" method="post">
        <?php
        // Generar 30 campos de entrada
        for ($i = 1; $i <= 10; $i++) {
            echo '<label for="dato' . $i . '">Dato ' . $i . ':</label><br>';
            echo '<input type="text" id="dato' . $i . '" name="datos[]" <br><br>';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
   
        // Recoger los datos del formulario
        $datos = $_POST['datos'];

        // Mostrar los datos almacenados en el arreglo
        echo "<h3>Datos ingresados:</h3>";
        echo "<ul>";
        foreach ($datos as $indice => $valor) {
            echo "<li>Dato " . ($indice + 1).": " . $valor . "</li>";
        }
        echo "</ul>";
    
    ?>
</body>
</html>