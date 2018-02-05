<?php

require 'connection.php';
session_start();

$name = mysqli_real_escape_string ($conn, $_POST['username']);
$email = mysqli_real_escape_string ($conn, $_POST['email']);
$address = mysqli_real_escape_string ($conn, $_POST['address']);
$password = sha1($_POST['password']);

$sql1 = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql1);
$count = mysqli_num_rows($result);
if ($count > 0) {
	header('location: register.php#register');
}else {

	$sql = "INSERT INTO users (name,email,address,password,role, status) VALUES ('$name','$email','$address','$password','customer', 'active')";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));
	header('location: items.php');
}





?>