<?php
// Iniciar la sesión//TIPOS DE VALIDACIONES
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
// Iniciar la sesión----------------
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
//VALIDACIONES POR SESIONES----------------------------------------------
<?php
// Iniciar la sesión
session_start();

// Validación de sesión activa
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // El usuario está autenticado
    // Puedes permitir el acceso a áreas protegidas aquí
} else {
    // Si el usuario no está autenticado, redirigirlo a la página de inicio de sesión
    header("location: login.php");
    exit;
}

// Manejo de sesiones expiradas
ini_set('session.gc_maxlifetime', 1800);
if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset(); // Desactivar todas las variables de sesión
    session_destroy(); // Destruir la sesión
}
$_SESSION['LAST_ACTIVITY'] = time(); // Actualizar la última actividad

// Regeneración de ID de sesión
session_regenerate_id(true);
?>
// validaciones POR FORMULARIO--------------------------------------------------
?php
// Validación de entrada de datos del formulario
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación del nombre
    $nombre = $_POST['nombre'];
    if(empty($nombre)) {
        $errorNombre = "El campo nombre es obligatorio";
    } else {
        // Procesar el nombre
    }

    // Validación de la contraseña
    $contraseña = $_POST['contraseña'];
    if(empty($contraseña)) {
        $errorContraseña = "El campo contraseña es obligatorio";
    } else {
        // Procesar la contraseña
    }

    // Otras validaciones de campos adicionales si es necesario
//validaciones con COOKIES
<?php
// Validación de Existencia de Cookies:
if(isset($_COOKIE['nombre_cookie'])) {
    // La cookie está configurada, puedes acceder a su valor
    $valorCookie = $_COOKIE['nombre_cookie'];
} else {
    // La cookie no está configurada o expiró
}

// Configuración de Cookies:
$nombre = "nombre_cookie";
$valor = "valor_cookie";
$expiracion = time() + (86400 * 30); // Expira en 30 días
$path = "/"; // Disponible en todo el sitio
$dominio = "example.com"; // Cambia esto por tu dominio
$seguro = true; // Solo se envía sobre HTTPS
$httpOnly = true; // Solo accesible a través de HTTP
setcookie($nombre, $valor, $expiracion, $path, $dominio, $seguro, $httpOnly);

// Eliminación de Cookies:
$expiracion = time() - 3600; // Establece la expiración en una hora atrás
setcookie($nombre, "", $expiracion, $path, $dominio, $seguro, $httpOnly);

// Validación de Datos de Cookies:
if(isset($_COOKIE['nombre_cookie'])) {
    $valor = $_COOKIE['nombre_cookie'];
    // Realiza la validación necesaria del valor de la cookie
    // Por ejemplo, verifica si el valor es lo que se espera
}
?>
}
?>
</body>
</html>