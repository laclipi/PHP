<!DOCTYPE html>
<html>
<head>
    <title>Tratamiento del Login</title>
</head>
<body>
<?php
// Array de amigos
$llistasAmics = array(
    array("dni" => 1, "nom"=>"pepito", "cognom"=>"Grillo", "imatge" => "https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("dni" => 2, "nom"=>"pinocho", "cognom"=>"", "nas llarg" => "https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("dni" => 3, "nom"=>"geppeto", "cognom"=>"", "constructor" => "https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
    array("dni" => 4, "nom"=>"pepet", "cognom"=>"Imarieta", "imatge" => "https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg")
);

// Verificamos si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["searchTerm"])) {
    $searchTerm = $_POST["searchTerm"];
    $resultados = array_filter($llistasAmics, function($amigo) use ($searchTerm) {
        return stripos($amigo["nom"], $searchTerm) !== false || stripos($amigo["cognom"], $searchTerm) !== false;
    });
} else {
    $resultados = $llistasAmics;
}
?>

<h1>Lista de Amigos</h1>
<ul>
    <?php foreach ($resultados as $amigo): ?>
        <li><?php echo $amigo["nom"] . " " . $amigo["cognom"]; ?></li>
    <?php endforeach; ?>
</ul>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="searchTerm">Buscar por nombre o apellido:</label>
        <input type="text" id="searchTerm" name="searchTerm" required>
    </div>
    <button type="submit">Buscar</button>
</form>

</body>
</html>                   