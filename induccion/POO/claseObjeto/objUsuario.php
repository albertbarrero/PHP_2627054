
    <?php
    require_once 'usuario.php';
    // Procesar los datos después de enviar el formulario
    
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        // Crear un objeto de la clase Usuario
        $usuario = new Usuario($nombre, $email);

        // Mostrar la información del usuario usando el método mostrarInfo
        echo "<h2>Datos Recibidos:</h2>";
        echo $usuario->mostrarInfo();
    
    ?>
