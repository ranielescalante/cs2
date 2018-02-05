<?php
	require 'connection.php';

	$index = $_GET['index'];
	$status = $_POST['useract'];

	$sql = "UPDATE users SET status = '$status' WHERE id = '$index'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	


	header('location: orders.php');

?>