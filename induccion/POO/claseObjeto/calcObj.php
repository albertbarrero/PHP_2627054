<?php
    require_once "calc.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        // Instanciar la clase Calculadora
        $calculadora = new Calculadora($numero1, $numero2);

        // Realizar la operación seleccionada
        switch ($operacion) {
            case 'sumar':
                $resultado = $calculadora->sumar();
                break;
            case 'restar':
                $resultado = $calculadora->restar();
                break;
            case 'multiplicar':
                $resultado = $calculadora->multiplicar();
                break;
            case 'dividir':
                $resultado = $calculadora->dividir();
                break;
            default:
                $resultado = "Operación no válida";
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>