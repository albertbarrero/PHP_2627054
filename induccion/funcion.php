<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
        <label for="">Cuantos Input</label>
        <input type="text" name="espacio" id="">
        <input type="submit" value="Enviar">

    </form>

    <?php
    require_once 'funcion2.php';
    if (isset($_POST['espacio'])) {
        $espacio = $_POST['espacio'];
        campos($espacio); 
    } 
    mostrar();

    ?>
</body>
</html>