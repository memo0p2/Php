<?php session_start();

//Admin
require('config.php');
require('../functions.php');

$conexion=conexion($bd_config);
comprobarSession();

if (!$conexion) {
    header('Location: ../error.php');
}

$id=limpiarDatos($_GET['id']);

if (!$id) {
    header('Location: ' . RUTA . '/admin');
}

$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array(':id' => $id));
header('Location: ' . RUTA . '/admin');
?>