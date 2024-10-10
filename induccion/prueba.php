<?php
class MiClase {
    public static function metodoEstatico() {
        return "Este es un método estático.";
    }
}

// Llamando a un método estático
echo MiClase::metodoEstatico(); // Salida: Este es un método estático.