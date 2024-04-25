<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
<?php
ini_set('display_errors', 1);
ini_set('log_errors', 'On');
error_reporting(E_ALL);

$productes = array(
    array(
        "nom" => "Pomes",
        "imatge" => "https://www.cuina.cat/uploads/s1/65/74/83/red-delicious_22_645x400.jpeg",
        "preu" => 10.99
    ),
    array(
        "nom" => "Taronges",
        "imatge" => "https://botiga.mercatfontetes.cat/598-large_default/taronges-1kg-aprox-.jpg",
        "preu" => 20.49
    ),
    array(
        "nom" => "Cireres",
        "imatge" => "https://etselquemenges.cat/wp-content/media/2012/05/cireres-600.gif",
        "preu" => 15.79
    ),

    array(
        "nom" => "Peres",
        "imatge" => "https://etselquemenges.cat/wp-content/media/2012/05/cireres-600.gif",
        "preu" => 18
    )
);

echo("<!--\n");
print_r($productes);    
echo("-->");

// foreach
?>
<table border = "1">

<?php
  foreach($productes as $producteActual) {
?>
  <tr>
  <td><?=$producteActual['nom']?></td>
  <td><img src='<?=$producteActual['imatge']?>'></td> 
  <td><?=$producteActual['preu']?>€</td>
</tr>

<?php
  }
?>
</table>

<?php
echo("</BODY>");
echo("</HTML>");
?>

