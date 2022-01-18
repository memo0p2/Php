<?php 
clearstatcache();
error_reporting(0);
header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', 'n0m3l0', 'ajax');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
}else {
    $conexion->set_charset("utf8");
    $statement=$conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();
    $resultado = $statement->get_result();

    $respuesta = [];

    while($fila = $resultado->fetch_assoc()){
        $usuario = [
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'edad'=> $fila['edad'],
            'pais'=> $fila['pais'],
            'correo' => $fila['correo']
        ];
        array_push($respuesta,$usuario);
    }
}

echo json_encode($respuesta);
?>