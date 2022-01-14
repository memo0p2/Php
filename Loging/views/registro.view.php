<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registro</h1>
        <hr class="border">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="loging">
            <div class="from-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" id="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="from-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" id="password" class="password" placeholder="password">
            </div>
            <div class="from-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" id="password2" class="password_btn" placeholder="Repetir contrasena">
                <i class="submit-btn fa fa-arrow-right" onclick="loging.submit()"></i>
            </div>
            <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
        </form>
        <p class="texto-registrate">
            Ya tienes cuenta?
            <a href="loging.php">Iniciar Sesion</a>
        </p>
    </div>
</body>
</html>