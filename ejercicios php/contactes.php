<!DOCTYPE html>
<html>
<body>
<a href="contactes.php?fila=0">juan</a>
<a href="contactes.php?fila=1">toni</a>
<a href="contactes.php?fila=2">ikram</a>


<?php
$contactes = [

    [
        "nombre" => "Juan Lopez",
        "email" => "juanlopez@upc.es",
        "telefon" => "975623989",
    ],

    [
        "nombre" => "Toni Oller",
        "email" => "jtonioller@upc.es",
        "telefon" => "75623989",
    ],

    [
        "nombre" => "Ikram",
        "email" => "ikram@upc.es",
        "telefon" => "975623989",
    ]

];


if (isset($_GET["fila"])) {
    $fila = $_GET["fila"];
    print("La fila es: " . $fila . "<br>");
    
    // Verificar si el índice es válido
    if ($fila >= 0 && $fila < count($contactes)) {
        // Aquí puedes acceder al contacto específico y modificar sus valores
        $contacte = $contactes[$fila];
        // Modificar los valores del contacto según lo necesario
        $contacte["nombre"] = "Nuevo nombre";
        $contacte["telefono"] = "Nuevo teléfono";
        $contacte["email"] = "Nuevo email";
        
        // Puedes imprimir los nuevos valores para confirmar que se han modificado correctamente
        print("Nombre: " . $contacte["nombre"] . "<br>");
        print("Teléfono: " . $contacte["telefono"] . "<br>");
        print("Email: " . $contacte["email"] . "<br>");
    }
        // Luego, puedes actualizar el array original si es necesario

        // Iterar sobre el array de contactos
foreach ($contactes as $indice => $contacto) {
    // Mostrar los detalles de cada contacto
    print("Contacto #" . ($indice + 1) . "<br>");
    print("Nombre: " . $contacto["nombre"] . "<br>");
    print("Telefon: " . $contacto["telefon"] . "<br>");
    print("Email: " . $contacto["email"] . "<br>");
    print("<br>");
}}
?>