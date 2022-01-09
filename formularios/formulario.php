<?php
$errores = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)) {
        // $nombre = trim($nombre)//Quita espacios
        // $nombre = htmlspecialchars($nombre)
        // $nombre = stripcslashes($nombre)//quita diagonales

        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo 'Tu nombre es '. $nombre .'<br>';
    }else {
        $errores .= 'Agrega un nombre';
    }
    if(!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Por favor ingresa un correo valido <br />';
        } else {
            echo 'Tu correo es: ' . $correo;
        }
    }else {
        $errores .= 'Agrega un nombre';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="email" name="correo" id="correo" placeholder="Correo">

        <?php if (!empty($errores)):?>
            <div class="error"><?php echo $errores;?></div>
        <?php endif ;?>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>