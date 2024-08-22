<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Formulario para la cantidad de campos -->
    <form action="" method="post">
        <label for="cant"></label>
        <input type="number" name="cant" id="cant required">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_POST['cant'])) {
            $cant=$_POST['cant'];

            echo '<form action="" method="post">';
            for ($i=0; $i < $cant; $i++) { 
                echo'<label for="inp'.$i.'">Campo '.$i.'</label>';
                echo'<input type="number" id="inp'.$i.'" name="datos[]" required></br>';
            };
            echo'<input type="submit" value="Enviar">';
            echo '</form>';
        }

        if (isset($_POST['datos'])) {
        $datos=$_POST['datos'];
            echo '<ul>';
        foreach ($datos as $key => $datos) {
            echo '<li>  dato '.($key+1).': '.$datos.'</li></br>';
        };

    };
    ?>


</body>
</html>