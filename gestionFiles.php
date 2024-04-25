<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Archivos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Título de la página -->
    <h2>Listado de Ficheros</h2>
    <?php
    // Definir la carpeta base para la gestión de archivos
    $theFolder = $_GET['theFolder'] ?? "C:/xampp/htdocs";

    // Verificar si se realizó alguna operación (eliminar, renombrar, editar)
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
        if ($op == "delete") {
            // Operación de eliminación de archivo
            $file2Delete = $_GET['file'];
            if (unlink($theFolder . "/" . $file2Delete)) {
                echo "¡Archivo $file2Delete borrado!<br>";
            } else {
                echo "No se pudo borrar el archivo $file2Delete<br>";  
            }
        } else if ($op == "rename") {
            // Operación de renombrar archivo
            $theFile = $_GET["theFile"];
            $newName = $_GET["newName"];
            if (rename($theFolder . "/" . $theFile, $theFolder . "/" . $newName)) {
                echo "¡Archivo renombrado!<br>";
            } else {
                $error = error_get_last();
                echo "Error al renombrar el archivo: " . $error['message'] . "<br>";
            }
        } else if ($op == "edit") {
            // Operación de editar archivo (añadir código necesario aquí)
        }
    }
    ?>
    <!-- Mostrar la ruta de la carpeta actual -->
    <h1><?=$theFolder?></h1>
    <?php
    // Verificar si la carpeta existe y se puede abrir
    if (is_dir($theFolder)) {
        if ($gestor = opendir($theFolder)) {
    ?>
    <!-- Formulario para ingresar el nuevo nombre de archivo al renombrar -->
    <form>
        <input type="text" name="newName" value="nuevoArchivo.txt">
    </form>
    <!-- Tabla para mostrar el listado de archivos en la carpeta -->
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Extensión</th>
            <th>Tamaño (bytes)</th>
            <th>Última Modificación</th>
            <th>Acciones</th>
        </tr>
        <?php    
        // Recorrer cada archivo en la carpeta
        while (($theFile = readdir($gestor)) !== false) {
            // Excluir los directorios "." y ".."
            if (!($theFile == "." || $theFile == "..")) {
                $info = pathinfo($theFile);
                $name = $info['basename'];
                $ext = isset($info['extension']) ? $info['extension'] : '';
                $fullName = $theFolder . "/" . $theFile;
                $size = filesize($fullName);
                $lastDate = date("Y-m-d", filemtime($fullName));
                ?>
                <tr>
                    <!-- Mostrar el nombre, extensión, tamaño y fecha de modificación del archivo -->
                    <td><?=$name?></td>
                    <td><?=$ext?></td>
                    <td><?=$size?></td>
                    <td><?=$lastDate?></td>
                    <td>
                        <!-- Acciones según el tipo de archivo (ver, descargar, eliminar, renombrar, editar) -->
                        <?php if (is_dir($fullName)): ?>
                            <!-- Enlace para abrir el directorio -->
                            <a href="?theFolder=<?=$fullName?>/">Abrir</a>
                        <?php else: ?>
                            <!-- Acciones para archivos de texto -->
                            <?php if ($ext == "txt"): ?>
                                <!-- Enlace para ver el archivo -->
                                <a href="readFile.php?name=<?=urlencode($fullName)?>" target="_blank">Ver</a>
                            <!-- Acciones para archivos PDF o PHP -->
                            <?php elseif ($ext == "pdf" || $ext == "php"): ?>
                                <!-- Enlace para descargar el archivo -->
                                <a href="download.php?name=<?=urlencode($fullName)?>" target="_blank">Descargar</a>
                            <!-- Acciones para otros tipos de archivos -->
                            <?php else: ?>
                                <!-- Enlaces para eliminar y renombrar el archivo -->
                                <a href="?theFolder=<?=$theFolder?>&op=delete&file=<?=$theFile?>">Eliminar</a>
                                <a href="?theFolder=<?=$theFolder?>&op=rename&theFile=<?=$theFile?>&newName=<?=$name?>">Renombrar</a>
                                <!-- Enlace para editar el archivo -->
                                <a href="?theFolder=<?=$theFolder?>&op=edit&file=<?=$theFile?>">Editar</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <?php
        closedir($gestor);
    }}
    ?>
    <!-- Sección para subir archivos -->
    <h2>Subir Archivo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Subir">
    </form>
</body>
</html>