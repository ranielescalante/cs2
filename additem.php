<?php

require 'connection.php';

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["img/tempImage"]["tmp_name"], $target_file);

$name = $_POST['name'];
$description = $_POST['description'];
$image = $target_file;
$price = $_POST['price'];
$category = $_POST['category_id'];

$sql = "INSERT INTO items (name, description, image, price, category_id) VALUES 
	('$name', '$description', '$image', '$price','$category')";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('location: items.php');

?>