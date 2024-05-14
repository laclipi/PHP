
<!DOCTYPE html>
<html>
<head>
    <title>Tractament del Login</title>
</head>
<body>
<form action="formulari" method="post">
            <div>
                <label for="nom">nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="cognom">cognom:</label>
                <input type="text" id="cognom" name="cognom" required>
            </div> 

            <a href="publicacions.php">Ir a la página privada</a>

<h1>Tractament del Login</h1>
    <?php if(isset($existeixUsuariIPass) && $existeixUsuariIPass): ?>
        <h2>¡Login OK!</h2>
    <?php else: ?>
        <h2>¡Login KO!</h2>
    <?php endif; ?>
</body>
</html>
<?php
        $llistasAmics = array(
        array("dni" => 1, "nom"=>"pepito" , "grillo"=>"imatge => https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
        array("dni" => 1, "nom"=>"pinocho" , "nas llarg"=>"imatge => https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
        array("dni" => 1, "nom"=>"geppeto" , "constructor"=>"imatge => https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
        array("dni" => 1, "nom"=>"pepet" , "imarieta"=>"imatge => https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
        )

?>
<?php

    // Definimos una función para verificar el inicio de sesión
    function login($usuario, $contrasena) {
        // Aquí iría tu lógica real de autenticación, como consultar una base de datos, etc.
        // Por simplicidad, aquí solo se simula una autenticación exitosa para el usuario "usuario" y la contraseña "contraseña".
        if ($usuario === "usuario" && $contrasena === "contraseña") {
            return true; // Autenticación exitosa
        } else {
            return false; // Autenticación fallida
        }
    }

    // Verificamos si se ha enviado el formulario de inicio de sesión
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        // Intentamos iniciar sesión
        if (login($usuario, $contrasena)) {
            // Si el inicio de sesión es exitoso, mostramos la lista de amigos
            echo '<h1>Lista de Amigos</h1>';
            echo '<ul>';
            // mostrar la lista de amigos
            echo '<h1>Lista de Amigos</h1>';
            echo '<ul>';
            foreach ($llistasAmics as $amigo) {
                echo '<li>';
                echo '<strong>Nombre:</strong> ' . $amigo['nom'] . '<br>';
                foreach ($amigo as $clave => $valor) {
                    if ($clave !== 'nom') {
                        // Si la clave no es 'nom', asumimos que es un atributo adicional y mostramos su valor
                        // Aquí podrías personalizar la salida según tus necesidades
                        echo '<strong>' . $clave . ':</strong> ' . $valor . '<br>';
                    }
                }
                echo '</li>';
            }
            echo '</ul>';
        } else {
            // Si el inicio de sesión falla, mostramos un mensaje de error
            echo 'Error: Usuario o contraseña incorrectos.';
        }
    } else {
        // Si no se ha enviado el formulario, mostramos el formulario de inicio de sesión
        echo '<h1>Iniciar Sesión</h1>';
        echo '<form method="post" action="">';
        echo 'Usuario: <input type="text" name="usuario"><br>';
        echo 'Contraseña: <input type="password" name="contrasena"><br>';
        echo '<input type="submit" value="Iniciar Sesión">';
        echo '</form>';
    }
    ?>
</body>
</html>
    
    ?>

