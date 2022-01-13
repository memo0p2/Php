<?php 
$id=2;
try {
    $conexion= new PDO('mysql:host=localhost;dbname=prueba','root','n0m3l0');

    $statement= $conexion->prepare('select * from usuarios where id = :id');
    $statement->execute(array(
        ':id' => $id
    ));

    $resultados=$statement->fetchAll();
    print_r($resultados);
    echo '<br>';
    $statement= $conexion->prepare('select * from usuarios');
    $statement->execute();

    $resultados=$statement->fetchAll();
    foreach ($resultados as $res){
        print_r($res);
    }

    // $statement= $conexion->prepare('insert into usuarios(nombre,correo) values("mito","prueba@hotmail")');
    // $statement->execute();

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>