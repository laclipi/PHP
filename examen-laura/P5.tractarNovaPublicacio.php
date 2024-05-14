<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Publicació</title>
    <link rel="stylesheet" href="pr-examenCSS.css">
</head>
<body>
    <header>
        <h1>Logo o Título de la Página</h1>
        <div class="user-info">
        
    <?php
    //   usuario logeado
    $nombre_usuario = "Usuario Ejemplo";
    echo "Bienvenido, $nombre_usuario";
    ?>
    <a href="logout.php">Cerrar sesión</a>
</div>    
            <?php
            //   nombre de usuario logeado
            $nombre_usuario = "Usuario Ejemplo";
            echo "Bienvenido, $nombre_usuario";
            ?>
            <a href="logout.php">Cerrar sesión</a>
        </div>

    </header>

    <div class="formulario-publicacion">
        <h2>Nueva Publicación</h2>
         
        <form action="tractarNovaPublicacio.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required minlength="10">
            </div>
            <div>
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required maxlength="500"></textarea>
            </div>
            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen">
            </div>
            <button type="submit" name="submit">Publicar</button>
        </form>
    </div>

    <footer>
        <p>Información legal</p>
    </footer>
</body>
</html>