<?php

require "person-php";





$Persona1 = new Person ("Laura", 35, "femenino");
$Persona1 -> nom = "Laura";
$Persona1 -> saludar

//$Persona1 ->edad =35 error pq el atributo es privado
//$Persona1 -> genere = "femenino " ; error pq el atributo es protected


?>