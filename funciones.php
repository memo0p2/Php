<?php
$memo=0;
echo 'memo = ' . $memo;
echo '<br/>';
function saludo($nombre,$edad){
    echo 'Saludos '.$nombre . ' de edad ' . $edad;
}
function suma($num1,$num2){
    return $num1 + $num2;
}
function ola($memo){
    $memo=54;
    return $memo;
}
saludo('memo',12);
echo '<br/>';
$resultado =suma(3,4);
echo $resultado;
echo '<br/>';
$memo=ola($memo);
echo 'memo = ' . $memo;
echo '<br/>';
?>