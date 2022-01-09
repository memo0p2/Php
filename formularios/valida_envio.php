<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'Se enviaron por get';
}else {
    echo 'Se enviaron por post';
}
?>