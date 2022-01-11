<?php 
if($_POST){
    $num = $_POST['tamano'] . 'px';
    setcookie('font-size', $num,time()+60*60*24*30,'/');
    echo $num;
    header('Location: texto.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie seteada</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="tamano">Tamano de pixeles de la letra</label>
        <input type="number" placeholder="tamano" id="tamano" name="tamano">
        <br>
        <input type="submit" value="Ir al texto">
    </form>
</body>
</html>