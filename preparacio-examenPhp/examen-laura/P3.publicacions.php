<?php

$posts = 
array(
    array("id" => 1, "title"=>"l'entrada d'Elsa" , "descripcio"=>"zzzz", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 2, "title"=>"l'entrada d' Laura" , "descripcio"=>"3333", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 3, "title"=>"l'entrada d' Jaume" , "descripcio"=>"3333", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 4, "title"=>"l'entrada d'Paula" , "descripcio"=>"dddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("id" => 5, "title"=>"l'entrada d'Josep2" , "descripcio"=>"dddddd", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
)
?>
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
            <?php echo 'Bienvenido, ' . $_SESSION['username']; ?>
            <a href="logout.php">Cerrar sesión</a>
        </div>
        <div class="llistaAmics">
            llistaAmics <a href="llistaAmics.php">llistaAmics</a>
    </header>

    <footer>
        <p>Información legal</p>
    </footer>
</body>
</html>

<HTML>
    <BODY>
        Hola - publicacions
       <?php 
           foreach ($posts as $post) {                 
        ?>
           
           <div>
              <?=$post['title']?> <br><?=$post['descripcio']?>
                <img src="<?=$post['image'] ?>" width="100px"> <a onclick="" href="#">LIKE</a>
            </div>

        <?php
           }
        ?>
        </table>

    </BODY>
</HTML>