<html>
<head>
<body>
<h1> ejercicio 2php </h1>



<?php


if (isset($_POST["calcula"])){


$num1= $_POST ["num1"];
$num2= $_POST ["num2"];

echo "la suma de $num1 y $num2 es: ".suma ($num1,$num2);
}

function suma ($num1, $num2) {

    if ($num1 && $num2;)
    else
return "no se puede"
}


?>

<form  method = "post">

<label> numero 1 : </label>
<input type ="number" name = "numero1"><br>
<label> numero 2 : </label>
<input type ="number" name = "numero2"><br>

<input type = "submit" name = send value = "calcula">



</html>