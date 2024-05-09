<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra/Mostrar los products</title>
</head>
<body>
    <h1>Carrito de Compra</h1>
    <ul>
        <?php
        // Verificar si hay productos en el carrito
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $producto) {
                echo "<li>{$producto['nombre']} - ${$producto['precio']}</li>";
            }
        } else {
            echo "<li>No hay productos en el carrito</li>";
        }
        ?>
    </ul>
</body>
</html>