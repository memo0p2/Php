<?php 
header('Content-type: application/json; charset=utf-8');

$respuesta = [
	[
		'id' => '5b9c49f09b0a13367ad35ff9',
		'nombre' => 'Guillermo',
		'edad' => 21,
		'pais' => 'Mexico',
		'correo' => 'correo@correo.com'
	],
	[
		'id' => '5b9c49f09b0a13367ad35ff9',
		'nombre' => 'Jose',
		'edad' => 23,
		'pais' => 'Canada',
		'correo' => 'correo@correo.com'
	]
];

echo json_encode($respuesta);
?>