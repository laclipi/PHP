<?php
class Usuario {
    private $nombre;
    private $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function mostrarInfo() {
        return "Nombre: " . $this->nombre . ", Email: " . $this->email;
    }
}

class Admin extends Usuario {
    private $nivelAcceso;

    public function __construct($nombre, $email, $nivelAcceso) {
        parent::__construct($nombre, $email);
        $this->nivelAcceso = $nivelAcceso;
    }

    public function getNivelAcceso() {
        return $this->nivelAcceso;
    }

    public function setNivelAcceso($nivelAcceso) {
        $this->nivelAcceso = $nivelAcceso;
    }

    public function mostrarInfo() {
        return parent::mostrarInfo() . ", Nivel de Acceso: " . $this->nivelAcceso;
    }
}

// Crear un usuario
$usuario = new Usuario("Juan Pérez", "juan@example.com");
echo $usuario->mostrarInfo() . "\n"; // Output: Nombre: Juan Pérez, Email: juan@example.com

// Crear un administrador
$admin = new Admin("Ana López", "ana@example.com", "Super Admin");
echo $admin->mostrarInfo() . "\n"; // Output: Nombre: Ana López, Email: ana@example.com, Nivel de Acceso: Super Admin
?>