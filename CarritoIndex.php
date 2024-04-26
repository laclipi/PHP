<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra/Agregar Productos</title>
</head>
<body>
    <h1>Productos Disponibles</h1>
    <ul>
        <li>Producto 1 - $10 <button onclick="agregarProducto(1, 'Producto 1', 10)">Agregar al carrito</button></li>
        <li>Producto 2 - $20 <button onclick="agregarProducto(2, 'Producto 2', 20)">Agregar al carrito</button></li>
        <li>Producto 3 - $15 <button onclick="agregarProducto(3, 'Producto 3', 15)">Agregar al carrito</button></li>
    </ul>

    <script>
        function agregarProducto(id, nombre, precio) {
            // Envía una petición AJAX al servidor para agregar el producto al carrito
            // Aquí podrías usar fetch() o jQuery.ajax() para enviar la solicitud al servidor
            // Por simplicidad, este ejemplo solo muestra un mensaje en la consola
            console.log(`Producto ${nombre} agregado al carrito`);
        }
    </script>
</body>
</html>