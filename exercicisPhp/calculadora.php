<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>

    <?php
    // Funciones de operaciones matemáticas
    function suma($num1, $num2) {
        return $num1 + $num2;
    }

    function resta($num1, $num2) {
        return $num1 - $num2;
    }

    function multiplicacion($num1, $num2) {
        return $num1 * $num2;
    }

    // Verificar si se ha enviado el formulario
    if(isset($_POST["send"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        echo "La operación es $operacion <br>";

        // Realizar la operación seleccionada
        switch($operacion) {
            case "suma":
                $resultado = suma($num1, $num2);
                echo "La suma de $num1 y $num2 es: $resultado";
                break;
            case "resta":
                $resultado = resta($num1, $num2);
                echo "La resta de $num1 y $num2 es: $resultado";
                break;
            case "multiplicacion":
                $resultado = multiplicacion($num1, $num2);
                echo "La multiplicación de $num1 y $num2 es: $resultado";
                break;
        }
    }
    ?>

    <!-- Formulario de la calculadora -->
    <form method="post">
        <label>Numero 1:</label>
        <input type="number" name="num1"><br>

        <label>Numero 2:</label>
        <input type="number" name="num2"><br>

        <!-- Opciones de operaciones -->
        <input type="radio" name="operacion" value="suma">Suma <br>
        <input type="radio" name="operacion" value="resta">Resta <br>
        <input type="radio" name="operacion" value="multiplicacion">Multiplicación <br>

        <!-- Botón para calcular -->
        <input type="submit" name="send" value="Calcular">
    </form>
</body>
</html>

