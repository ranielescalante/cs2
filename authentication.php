<?php
session_start();
require 'connection.php';

$email = $_POST['email']; //user input
$password = sha1($_POST['password']); //user input

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'"; 
	$result = mysqli_query($conn,$sql); 

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);

		$stat = $row['status'];
		if($stat == 'active'){
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['role'] = $row['role'];
			
			header('location: items.php');
		}else{
			header('location: register.php');
		}


	} else {

		header('location: index.php');
		
	}


// if(isset($_POST['register'])){
// 	$username = $_POST['username'];
// 	$sql = "SELECT * FROM users WHERE username = '$username'";
// 	$result = mysqli_query($conn,$sql);
// 	if(mysqli_num_rows($result)>0){
// 		echo "invalid";
// 	} else {
// 		echo "valid";
// 	}
// }






?>