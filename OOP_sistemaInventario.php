<?php
class Producto {
    private $nombre;
    private $precio;
    private $cantidad;

    public function __construct($nombre, $precio, $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function calcularValorInventario() {
        return $this->precio * $this->cantidad;
    }

    public function mostrarInfo() {
        return "Producto: " . $this->nombre . ", Precio: $" . $this->precio . ", Cantidad: " . $this->cantidad;
    }
}

// Crear un producto
$producto = new Producto("Laptop", 1200, 10);
echo $producto->mostrarInfo() . "\n"; // Output: Producto: Laptop, Precio: $1200, Cantidad: 10
echo "Valor de Inventario: $" . $producto->calcularValorInventario() . "\n"; // Output: Valor de Inventario: $12000
?>