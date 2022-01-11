<?php

if (isset($_COOKIE['font-size'])) {
    $tamano = $_COOKIE['font-size'];
}else {
    $tamano= '15px';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: <?php echo $tamano;?>
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ipsa dolor id modi quo ut quas ratione perspiciatis soluta 
        nobis dignissimos? Quam reiciendis voluptatem temporibus quas, 
        veniam repellat officia cum voluptates?</p>
</body>
</html>