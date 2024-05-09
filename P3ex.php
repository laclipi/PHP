<!-- PAGINA 3---------------------------------galeria,NOU USUARI -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Privada</title>
    <link rel="stylesheet" href="pr-examenCSS.css">
</head>
<body>
    <header>
        <h1>ESTA ES LA PAGINA 3 PRIVADA</h1>
        
        <span>Nombre de Usuario</span>
        <a href="#">Logout</a>
        <br>
        <a href="#">Nueva Publicación</a>
    </header>
    <br>
    <br>
    
    <?php//añadir RUTA IMG
        $images = array(
            array("src" => "escritorio-lauraphp-img", "alt" => "Imagen 1"),
            array("src" => "imagen2.jpg", "alt" => "Imagen 2"),
            array("src" => "imagen3.jpg", "alt" => "Imagen 3"),
            array("src" => "imagen4.jpg", "alt" => "Imagen 4"),
            array("src" => "imagen5.jpg", "alt" => "Imagen 5"),
            array("src" => "imagen6.jpg", "alt" => "Imagen 6")
        );

        foreach ($images as $image) 
            ?>
            <div class="image">
                <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>">
                <button class="like-btn">Like</button>
                <span class="like-count">0</span>
                <input type="text" placeholder="Escribe un comentario">
                <button class="comment-btn">Comentar</button>
            </div>
               

    <footer>
        <p>© 2024 - Todos los derechos reservados</p>
    </footer>
</body>
</html>