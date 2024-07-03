<?php
class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function mostrarInfo() {
        return "Producto: " . $this->nombre . ", Precio: $" . $this->precio;
    }
}

class Pedido {
    private $productos = [];
    private $total = 0;

    public function agregarProducto(Producto $producto, $cantidad) {
        $this->productos[] = ['producto' => $producto, 'cantidad' => $cantidad];
        $this->total += $producto->getPrecio() * $cantidad;
    }

    public function mostrarPedido() {
        foreach ($this->productos as $item) {
            $producto = $item['producto'];
            $cantidad = $item['cantidad'];
            echo $producto->mostrarInfo() . ", Cantidad: " . $cantidad . "\n";
        }
        echo "Total del Pedido: $" . $this->total . "\n";
    }
}

// Crear productos
$producto1 = new Producto("Manzana", 0.5);
$producto2 = new Producto("Naranja", 0.7);

// Crear un pedido
$pedido = new Pedido();
$pedido->agregarProducto($producto1, 10);
$pedido->agregarProducto($producto2, 5);

// Mostrar el pedido
$pedido->mostrarPedido();
// Output:
// Producto: Manzana, Precio: $0.5, Cantidad: 10
// Producto: Naranja, Precio: $0.7, Cantidad: 5
// Total del Pedido: $9.5
?>