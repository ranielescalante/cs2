<?php

session_start();

$index = $_GET['index'];
$i = $_GET['i'];
// echo $index . " ". $i;
unset($_SESSION['cart'][$i]);
// print_r($_SESSION['cart']);
header('location: cart.php');

?>