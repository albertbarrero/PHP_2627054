<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
</head>
<body>
    <h1>Formulario de Usuario</h1>
    <form action="objUsuario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>

</body>
</html>