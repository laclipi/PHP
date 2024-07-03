<?php
// Definición de una clase en PHP
class MiClase {
    // Propiedad de la clase
    public $propiedadPublica; // Propiedad pública accesible desde cualquier lugar
    private $propiedadPrivada; // Propiedad privada accesible solo dentro de la clase
    protected $propiedadProtegida; // Propiedad protegida accesible dentro de la clase y por clases heredadas

    // Método constructor, se llama automáticamente al crear una instancia de la clase
    public function __construct($valorPublico, $valorPrivado, $valorProtegido) {
        $this->propiedadPublica = $valorPublico;
        $this->propiedadPrivada = $valorPrivado;
        $this->propiedadProtegida = $valorProtegido;
    }

    // Método público accesible desde cualquier lugar
    public function metodoPublico() {
        return "Este es un método público.";
    }

    // Método privado accesible solo dentro de la clase
    private function metodoPrivado() {
        return "Este es un método privado.";
    }

    // Método protegido accesible dentro de la clase y por clases heredadas
    protected function metodoProtegido() {
        return "Este es un método protegido.";
    }

    // Método para acceder a una propiedad privada
    public function getPropiedadPrivada() {
        return $this->propiedadPrivada;
    }

    // Método para modificar una propiedad privada
    public function setPropiedadPrivada($valor) {
        $this->propiedadPrivada = $valor;
    }
}

// Herencia: Clase Hija que extiende la clase MiClase
class ClaseHija extends MiClase {
    // Método de la clase hija
    public function metodoDeHija() {
        return "Este es un método de la clase hija.";
    }

    // Método para acceder al método protegido de la clase padre
    public function accederMetodoProtegido() {
        return $this->metodoProtegido();
    }
}

// Crear una instancia de la clase MiClase
$miObjeto = new MiClase("Valor Público", "Valor Privado", "Valor Protegido");

// Acceder a una propiedad pública
echo $miObjeto->propiedadPublica . "\n"; // Output: Valor Público

// Usar un método público
echo $miObjeto->metodoPublico() . "\n"; // Output: Este es un método público.

// Acceder a una propiedad privada usando métodos públicos
echo $miObjeto->getPropiedadPrivada() . "\n"; // Output: Valor Privado

// Modificar una propiedad privada usando métodos públicos
$miObjeto->setPropiedadPrivada("Nuevo Valor Privado");
echo $miObjeto->getPropiedadPrivada() . "\n"; // Output: Nuevo Valor Privado

// Crear una instancia de la clase hija
$miObjetoHijo = new ClaseHija("Valor Público", "Valor Privado", "Valor Protegido");

// Usar un método de la clase hija
echo $miObjetoHijo->metodoDeHija() . "\n"; // Output: Este es un método de la clase hija.

// Acceder a un método protegido desde la clase hija
echo $miObjetoHijo->accederMetodoProtegido() . "\n"; // Output: Este es un método protegido.

//*Clases y Objetos:Una clase es un modelo para crear objetos, que son instancias de clases
Los objetos tienen propiedades (variables) y métodos (funciones).
Propiedades:

Públicas (public): Accesibles desde cualquier lugar.
Privadas (private): Accesibles solo dentro de la propia clase.
Protegidas (protected): Accesibles dentro de la clase y sus clases heredadas.
Métodos:

Públicos (public): Accesibles desde cualquier lugar.
Privados (private): Accesibles solo dentro de la propia clase.
Protegidos (protected): Accesibles dentro de la clase y sus clases heredadas.
Constructor:

Método especial (__construct) que se llama automáticamente al crear una instancia de la clase.
Herencia:

Permite que una clase (hija) herede propiedades y métodos de otra clase (padre).
Se usa la palabra clave extends.
Accesores y Mutadores:

Métodos para obtener (get) y establecer (set) el valor de propiedades privadas

?>

