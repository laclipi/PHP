<?php


class Person {
    public $nom;
    private $edad;
    protected $genere;
    
public function __construct ($nom, $edad, $genere){
    $this -> nom = $nom;
    $this ->edad = $edad;
    $this -> genere = $genere;


}

/*public function__destruct(){
    echo "adios" . $this -> nom;
}
*//
//setter and getters

public function getNom(){
return $this ->nom;
}
public function setNom ($nom){
$this ->nom = $nom;}

    public function saludar (){
echo "Hola" . $this -> nom;


    }
}

/*
$Persona1 = new Person ();
$Persona1 -> nom = "Laura";
$Persona1 -> edad = 35
//error pq el atributo es privado
$Persona1 -> genere = "femenino "
//error porque el atributo es */


?>