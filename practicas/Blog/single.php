<?php 
require('admin/config.php');
require('functions.php');

$conexion=conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

$id=id_articulo($_GET['id']);

if (empty($id)) {
    header('Location: index.php');
}

$post = obtener_post_id($conexion,$id);

if (!$post) {
    header('Location: index.php');
}

$post=$post[0];

require('views/single.view.php');
?>