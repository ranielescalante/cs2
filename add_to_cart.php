<?php

session_start();

// $index = $_GET['index'];

//from menu page
/*if(isset($_POST['quantity'])){
	$quantity = $_POST['quantity'];

	if(isset($_SESSION['cart'][$index]))
		$_SESSION['cart'][$index] += $quantity;
	else
		$_SESSION['cart'][$index] = $quantity;

	header('location: items.php');
}

if(isset($_POST['change_quantity'])){
	$quantity = $_POST['change_quantity'];
	$_SESSION['cart'][$index] = $quantity;

	header('location: cart.php');

}
*/

$index = 0;
$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$image = $_POST['image'];

if(isset($_SESSION['cart-index'])) {
	$_SESSION['cart-index'] = $_SESSION['cart-index'] + 1;
	$index = $_SESSION['cart-index'];
} else {
	$_SESSION['cart-index'] = 0;
}

$_SESSION['cart'][$index]['id'] = $id;
$_SESSION['cart'][$index]['name'] = $name;
$_SESSION['cart'][$index]['quantity'] = $quantity;
$_SESSION['cart'][$index]['price'] = $price;
$_SESSION['cart'][$index]['image'] = $image;
/*
if(isset($_SESSION['cart'][$index])) {
	$_SESSION['cart'][$index][$quantity] = $quantity;
} 
*/
header('location: cart.php');

?>