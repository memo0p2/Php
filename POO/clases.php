<?php
class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function showInfo(){
        echo 'Hola mundo';
    }
}

$memo = new Persona();
$memo->nombre = 'Guillermo';
$memo->edad = 23;
$memo->pais = 'Mexico';
$memo->showInfo();


$alejandro = new Persona();
$alejandro->nombre = 'alejandro';
$alejandro->edad = 21;
$alejandro->pais = 'Espana';


?>