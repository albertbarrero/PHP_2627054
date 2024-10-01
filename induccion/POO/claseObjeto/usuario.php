<?php
class Usuario {
    // Propiedades
    private $nombre;
    private $email;

    // Constructor
    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    // Métodos Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    // Método para mostrar información del usuario
    public function mostrarInfo() {
        return "Nombre: " . $this->getNombre() . "<br>Email: " . $this->getEmail();
    }
}
?>