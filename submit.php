<?php

session_start();

require 'connection.php';
$value = "";

$total = $_GET['total'];
$email = $_SESSION['email'];

$sql3 = "INSERT INTO final_userorder (total_price,email, delivery_status) VALUES ($total,'$email', 'pending')";
	mysqli_query($conn,$sql3);
	$purchase_id = mysqli_insert_id($conn);

for($i = 0; $i < count($_SESSION['cart']); $i++) {
	$email = $_SESSION['email'];
	$id = $_SESSION['cart'][$i]['id'];
	$quantity = $_SESSION['cart'][$i]['quantity'];
	$price = $_SESSION['cart'][$i]['price'];
	$cur = "('" . $email . "', '" . $id . "', '" . $price . "', '" . $quantity . "', '" . $purchase_id . "')";
	if($i != (count($_SESSION['cart']) - 1)) {	
		$value .= $cur . ",";
	} else {
		$value .= $cur;
	}
}



$sql = "INSERT INTO final_order (email, item_id, item_price, item_quantity, purchase_id) VALUES " . $value;
mysqli_query($conn,$sql) or die(mysqli_error($conn));
unset($_SESSION['cart']);
unset($_SESSION['cart-index']);
header('location: aftersubmission.php');

?>