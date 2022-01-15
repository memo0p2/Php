<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion: </label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>
            <input type="submit" value="Subir foto" class="submit">
        </form>
    </div>

    <footer>
        <p class="copyright">
            Guillermo Ramirez Olvera
        </p>
    </footer>
</body>
</html>