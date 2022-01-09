<?php 
if(!$_POST)
    header('Location: index.php');

    
$nombre=$_POST["nombre"];
$sexo=$_POST["sexo"];
$year=$_POST["year"];
$terminos=$_POST["terminos"];
echo 'hola, '. $nombre.' eres '.$sexo.' naciste en '.$year.' y con los terminos '.$terminos;

?>