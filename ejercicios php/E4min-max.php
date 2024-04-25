<?php 
// $elems=array(2,11,9,8,-1,5);

$elems=array(5,22,8,14,-5,6,60);

print_r($elems);

$max = 0;
$min = 9999;
$total = 0;

// CALCULA MAXIMS, els minms i els elements sumatoris totals 
foreach($elems as $element) { // Crida cada Element de l'Array elems (els números...)
  echo("element actual: $element <br>");
  echo("<BR>");
  if ($max < $element) {
    echo ("$element és més gran que $max !!!! <br>");
    $max = $element;
  }
  else  {
    echo ("$element NO és més gran que $max !!!! <br>");   
  }

  if ($min > $element) {
    echo ("$element és més petit que $min !!!! <br>");
    $min = $element;
  }
  else  {
    echo ("$element NO és més petit que $min !!!! <br>");   
  }
 $total=$total+$element;
}

echo("El màxim és".$max."<br>"); // Ensenya Número MÀXIM
echo("El mínim és".$min."<br>"); // Ensenya Número MÍNIM
echo("el sumatori de tots els elements es".$total."<br>"); // ensenya els totals
?>
