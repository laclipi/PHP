<?php
class Calculadora {
    // Método para sumar dos números
    public function sumar($a, $b) {
        return $a + $b;
    }

    // Método para restar dos números
    public function restar($a, $b) {
        return $a - b;
    }

    // Método para multiplicar dos números
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    // Método para dividir dos números
    public function dividir($a, $b) {
        if ($b == 0) {
            return "Error: División por cero";
        }
        return $a / $b;
    }
}

// Crear una instancia de la clase Calculadora
$calculadora = new Calculadora();

// Usar los métodos de la clase Calculadora
echo "Suma: " . $calculadora->sumar(10, 5) . "\n"; // Output: Suma: 15
echo "Resta: " . $calculadora->restar(10, 5) . "\n"; // Output: Resta: 5
echo "Multiplicación: " . $calculadora->multiplicar(10, 5) . "\n"; // Output: Multiplicación: 50
echo "División: " . $calculadora->dividir(10, 5) . "\n"; // Output: División: 2
?>