<?php
function letrasMasMenosFrecuentes($string) {
    // Convertir el string a minúsculas para hacer el conteo sin distinguir entre mayúsculas y minúsculas
    $string = strtolower($string);

    // Contar la frecuencia de cada letra
    $frecuencias = count_chars($string, 1);

    // Encontrar la letra más frecuente
    $letraMasFrecuente = '';
    $maxFrecuencia = 0;
    foreach ($frecuencias as $letra => $frecuencia) {
        if (ctype_alpha(chr($letra))) { // Comprobar si es una letra
            if ($frecuencia > $maxFrecuencia) {
                $maxFrecuencia = $frecuencia;
                $letraMasFrecuente = chr($letra);
            }
        }
    }

    // Encontrar la letra menos frecuente
    $letraMenosFrecuente = '';
    $minFrecuencia = PHP_INT_MAX; // Inicializar con un valor muy grande
    foreach ($frecuencias as $letra => $frecuencia) {
        if (ctype_alpha(chr($letra))) { // Comprobar si es una letra
            if ($frecuencia < $minFrecuencia) {
                $minFrecuencia = $frecuencia;
                $letraMenosFrecuente = chr($letra);
            }
        }
    }

    return array($letraMasFrecuente, $letraMenosFrecuente);
}

$string = "Hola Mundo";
list($letraMasFrecuente, $letraMenosFrecuente) = letrasMasMenosFrecuentes($string);
echo "La letra que más aparece es: " . $letraMasFrecuente . "\n";
echo "La letra que menos aparece es: " . $letraMenosFrecuente . "\n";
?>
 
 // 1.convertimos todo a minusculas2. convertir cadena en arreglo caracteres con scaraceres=str_split(scadena), 3.s.conteo=[];
4.iterar sobre el arreglo de caracteres foreach  (s caracter as s caracter).....ver ejercicio resuelto!!!