<?php 

function conexion($baseDatos,$usuario,$password){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$baseDatos",$usuario,$password);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

?>