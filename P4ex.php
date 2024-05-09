<!-- PAGINA 4---------------------------------NUEVA PUBLICACION -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Publicación</title>
    <link rel="stylesheet" href="pr-examenCSS.css">

</head>

<body>
    <header>
        <h1>ESTA ES LA PAGINA 4 PRIVADA

            <?php echo $_SESSION["username"]; ?>
        </h1>
        <button onclick="window.location.href='logout.php'">Cerrar Sesión</button>
<?php
        $posts = [
        ['title' => 'Post 1', 'description' => '**Description 1', 'image' => 'https://concepto.de/wp-content/uploads/2018/08/verano1-e1535637769656.jpg', 'likes' => 10, 'comments' =>
        5],
        ['title' => 'Post 2', 'description' => '******Description 2', 'image' => 'image2.jpg', 'likes' => 20, 'comments' =>
        8],
        ['title' => 'Post 3', 'description' => '-----Description 3', 'image' => 'image3.jpg', 'likes' => 15, 'comments' =>
        12],
        ['title' => 'Post 3', 'description' => '-----Description 4', 'image' => 'image3.jpg', 'likes' => 15, 'comments' =>
        12]
        ];

        echo '<div class="posts">';
            foreach ($posts as $post) {
            /*echo '<div class="post">';
                echo '<h3>' . $post['title'] . '</h3>';
                echo '<p>' . $post['description'] . '</p>';
                echo '<img src="' . $post['image'] . '" alt="Image">';
                echo '<button>Like (' . $post['likes'] . ')</button>';
                echo '<input type="text" placeholder="Comentario">';
                echo '<button>Comentar (' . $post['comments'] . ')</button>';
                echo '</div>';
*/
?>
           <div class="post">';
                <h3><?=$post['title']?></h3>
                <p><?=$post['description']?></p>
                <img src="<?=$post['image']?>" alt="Image">
                <button>Like ('<?=$post['likes']?>')</button>
                <input type="text" placeholder="Comentario">
                <button>Comentar (<?=$post['comments']?>)</button>
            </div>

<?php
            }
            echo '</div>';

        echo '<a href="?new_post=true">Nueva publicación</a>';

         
        if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
        session_destroy();
        showMessage('Has cerrado sesión correctamente.');
        }
    
        ?>
    </header>
    <div>
        <!-- Formulario para nueva publicación -->ç

    </div>
    <div>
        <!-- Última publicación -->
    </div>
    <footer>
        <p>Información legal</p>
    </footer>