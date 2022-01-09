<?php 

// Variable
$nombre = 'Guillermo Ramirez';

// Mostramos en pantalla mediante echo
echo 'Hola Mundo, mi nombre es: ' . $nombre ;

// phpinfo();

?>

<!-- Parte II -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina web de Guillermo</title>
</head>
<body>
	<h1>Pagina web de Guillermo</h1>
	<h3><?php echo 'Hola ' . $nombre ?></h3>
</body>
</html>