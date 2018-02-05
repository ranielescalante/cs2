<?php
	require 'connection.php';

	$index = $_GET['index'];

	$sql = "DELETE FROM final_order WHERE purchase_id = '$index'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	$sql1 = "DELETE FROM final_userorder WHERE id = '$index'";
	
	mysqli_query($conn,$sql1) or die(mysqli_error($conn));

	header('location: orders.php');

?>