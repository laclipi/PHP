<?php
$theFile = $_GET['name'];

echo "el fitxer a visualitzar es $theFile <br>";
?>
<form>

<?php
 $text ="";
if ($gestor = fopen($theFile, 'r')) {
  while (($line = fgets($gestor)) !== false) {
    $text = $text.$line;
  }
  fclose($gestor);
}


?>
<textarea name="c" rows="25" cols="70"><?=$text?> </textarea>
<input type=submit name="enviar">
</form>