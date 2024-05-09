<!-- PAGINA 1---------------------------------Formulario de LOGIN -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="pr-examenCSS.css">
</head>
<body>
    <header>
        <h1>ESTA ES LA PAGINA 1 CON EL LOGIN</h1>
    </header>
    <div>
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <div>
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                
            </div>
            <div>
                <label for="email">email:</label>
                <input type="email" id="email" name="email" required>
                <br>
<br>
            <button type="submit">Sign In</button>
        </form>
<br>
        <a href="register.php">Regístrate</a>
        <div class="container">
        <footer>
        <p>Información legal</p>
    </footer>
</body>
</html>                   
            
            <?php
            session_start();
            
            // Función para mostrar errores
            function showError($message) {
                echo '<div style="color: red;">' . $message . '</div>';
            }
            
            // Función para mostrar mensajes
            function showMessage($message) {
                echo '<div style="color: green;">' . $message . '</div>';
            }
    
            // Simulación de la base de datos (usuarios )
            $users = [
                ['username' => 'user1', 'password' => 'pass1', 'name' => 'User One', 'email' => 'user1@example.com'],
                ['username' => 'user2', 'password' => 'pass2', 'name' => 'User Two', 'email' => 'user2@example.com']
            ];
    
            if(isset($_SESSION['username'])) {
                echo '<div class="user-info">';
                echo 'Bienvenido, ' . $_SESSION['username'];
                echo ' | <a href="?logout=true">Cerrar sesión</a>';
                echo '</div>';
                

                
                if(isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    foreach ($users as $user) {
                        if($user['username'] == $username && $user['password'] == $password) {
                            $_SESSION['username'] = $username;
                            showMessage('Has iniciado sesión correctamente.');
                            break;
                        } else {
                            showError('Nombre de usuario o contraseña incorrectos.');
                        }
                    }
                }  }  
    


