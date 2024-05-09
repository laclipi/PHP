<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sumatorio y valores máximo y mínimo</title>
</head>
<body>

<?php
// Función para calcular el sumatorio y los valores máximo y mínimo de un array
function sumatorio_max_min($array) {
    $sum = array_sum($array);
    $max = max($array);
    $min = min($array);
    return array('sum' => $sum, 'max' => $max, 'min' => $min);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $values = $_POST['values'];
    
    // Convertir los valores a un array
    $numbers = explode(",", $values);
    
    // Eliminar los espacios en blanco de cada valor
    $numbers = array_map('trim', $numbers);
    
    // Calcular el sumatorio y los valores máximo y mínimo utilizando la función previa
    $result = sumatorio_max_min($numbers);
    
    // Mostrar los resultados
    echo "Sumatorio: " . $result['sum'] . "<br>";
    echo "Valor máximo: " . $result['max'] . "<br>";
    echo "Valor mínimo: " . $result['min'] . "<br>";
    //En este código, primero verificamos si se ha enviado el formulario. 
    //Luego, obtenemos los valores ingresados en el formulario y los convertimos en un array. 
    //Después, utilizamos la función sumatorio_max_min para calcular el sumatorio, 
    //así como los valores máximo y mínimo del array. 
    //Finalmente, mostramos los resultados debajo del formulario.
}
?>

<form method="post">
    <label for="values">Introduce 10 valores separados por comas:</label><br>
    <input type="text" id="values" name="values" required><br><br>
    <button type="submit">Calcular</button>
    
</form>

</body>
</html>