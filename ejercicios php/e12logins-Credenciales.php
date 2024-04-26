<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ya ha iniciado sesión-------------------------
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

    // Lógica de autenticación con contraseña en texto plano-----------------
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

    // Función para evaluar la fortaleza de la contraseña------------------------
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

    <!-- Ejemplos de VALIDACIONES -->
    <?php
// Validar un correo electrónico---------------------------------------------
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El correo electrónico no es válido";
}

// Validar un nombre (solo letras y espacios)------------------------------
$nombre = $_POST['nombre'];
if (!preg_match("/^[a-zA-Z\s]+$/", $nombre)) {
    echo "El nombre solo debe contener letras y espacios";
}

// Otros tipos de validaciones según los datos que estés recibiendo
//Prevención de Ataques CSRF:----------------------------------------------------
?>
<?php
session_start();

// Generar un token CSRF y guardarlo en la sesión
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Genera un token aleatorio
}

// Enviar el token CSRF como un campo oculto en el formulario
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

// Verificar el token CSRF al procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar el token CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // Token CSRF inválido, detener el procesamiento del formulario
        die("Error de seguridad: Token CSRF inválido");
    }
    // Procesar el formulario normalmente
    //validar si la sesion activa---------------------------------------
    <?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está autenticado y tiene una sesión activa
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // El usuario está autenticado, permitir el acceso a áreas protegidas
    // Aquí iría el contenido protegido que solo los usuarios autenticados pueden ver
} else {
    // Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión
    header("location: login.php");
    exit;
}
?>
//manejo de SESIONES EXPIRADAS--------------------------------------------
<?php
// Configurar el tiempo de expiración de la sesión (por ejemplo, 30 minutos)
ini_set('session.gc_maxlifetime', 1800);

// Iniciar la sesión
session_start();

// Destruir la sesión si ha pasado más tiempo que el tiempo de expiración
if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();     // Desactivar todas las variables de sesión
    session_destroy();   // Destruir la sesión
}
$_SESSION['LAST_ACTIVITY'] = time(); // Actualizar la última actividad

// Resto del código para la gestión de la sesión
?>

}
?>

//REGENERACION ID DE SESION---------------------------------------------------
<?php
// Iniciar la sesión
session_start();

// Regenerar el ID de sesión
session_regenerate_id(true);
?>
//Uso de HTTPS:No se puede implementar directamente en el código PHP, 
//pero se debe asegurar que el servidor web esté configurado para utilizar HTTPS.
<?php
//PROTECCION CONTRA AC DE FUERZA BRUTA--------------------------------------
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lógica de autenticación del usuario
    // Aquí se verificarían las credenciales del usuario
    // Si las credenciales son incorrectas, se podrían contar los intentos fallidos
}
?>
</body>
</html>