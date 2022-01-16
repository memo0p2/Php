<?php session_start();

//Admin
require('config.php');
require('../functions.php');

$conexion=conexion($bd_config);
comprobarSession();

if (!$conexion) {
    header('Location: ../error.php');
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $titulo=limpiarDatos($_POST['titulo']);
    $extracto=limpiarDatos($_POST['extracto']);
    $texto=$_POST['texto'];
    $thumb=$_FILES['thumb']['tmp_name'];
    $archivo_subido='../'. $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($thumb,$archivo_subido);

    $statement = $conexion->prepare(
        'INSERT INTO articulos (titulo,extracto,fecha,texto,thumb)
        VALUES (:titulo,:extracto,now(),:texto,:thumb)
        ');
    $statement->execute(array(
        ':titulo'=>$titulo,
        ':extracto'=>$extracto,
        ':texto'=>$texto,
        ':thumb'=>$_FILES['thumb']['name']
    ));
    header('Location: ' . RUTA . '/admin');
}

require('../views/nuevo.view.php');
?>