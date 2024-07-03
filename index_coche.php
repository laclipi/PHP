<?php
require "Coche.php";
$coche1 = new Coche("Peugeot", "7689ABC", 5, "gris");
$coche1 -> arrancarCoche();
$coche1 -> setColor ("Amarillo");
$coche1-> pararCoche();

$coche2 = new Coche ("Seat", "654abc", 3, "Blanco");
$coche2->arrancarCoche();


