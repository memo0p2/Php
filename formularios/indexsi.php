<?php 
    if($_POST)
        echo $_POST['nombre']
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" placeholder="nombre" name="nombre">
        <br>
        <label for="hombre">hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">

        <label for="mujer">mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">
        <br>

        <select name="year" id="year">
            <?php 
                for ($i=0;$i<20;$i++){
                    echo "<option value='".(2000+$i)."'>".(2000+$i)."</option>";
                }
            ?>
        </select>
        <br>

        <label for="terminos">Aceptas los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>