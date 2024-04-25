<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ya ha iniciado sesión
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Si el usuario ya está logueado, redirigirlo a la página de inicio
    header("location: home.php");
    exit;
}

// Verificar si se ha enviado el formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lógica de autenticación con contraseña en texto plano
    if($username === 'usuario' && $password === 'contraseña') {
        // Iniciar sesión
        $_SESSION['loggedin'] = true;
        // Redirigir al usuario a la página de inicio
        header("location: home.php");
        exit;
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        $error = "Nombre de usuario o contraseña incorrectos";
    }

    // Otra forma de autenticación sería verificar las credenciales con una base de datos
    // Por ejemplo:
    /*
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    if($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        header("location: home.php");
        exit;
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }
    */

    // También se puede utilizar autenticación con contraseñas hash
    // Por ejemplo:
    /*
    $storedPassword = getPasswordFromDatabase($username); // Obtener la contraseña hash de la base de datos
    if(password_verify($password, $storedPassword)) {
        $_SESSION['loggedin'] = true;
        header("location: home.php");
        exit;
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }
    */

    // Función para evaluar la fortaleza de la contraseña
    function getStrongLevel($password) {
        $level = 0;
        $level += strlen($password) > 6 ? 1 : 0;
        $level += preg_match('/[!@#$%^&*?_~]{2,}/', $password) ? 1 : 0;
        $level += preg_match('/[a-z]{2,}/', $password) ? 1 : 0;
        $level += preg_match('/[A-Z]{2,}/', $password) ? 1 : 0;
        $level += preg_match('/[0-9]{2,}/', $password) ? 1 : 0;
        return $level;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <!-- Formulario de inicio de sesión -->
    <form method="post">
        <div>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
    
    <!-- Mostrar mensaje de error si existe -->
    <?php if(isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>