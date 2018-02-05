<?php

require 'connection.php';

if(isset($_POST['edit'])){
		$index = $_POST['index'];
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);
		
		echo "<div class='row'>";
		echo "<div class='col-xs-12 item_display'><form action='edit.php?index=$index' method='post'><img class='center-align' src='$image' style='height: 600px; width: 400px;'><br>";
		echo "Name: <input type='text' name='name' value='$name'><br>";
		echo "Description: <textarea name='description'>$description</textarea><br>";
		echo "Price: Php <input type='number' name='price' min=0 value='$price'><br>";
		echo "<input type='button' class='btn btn-danger modal-action modal-close waves-effect waves-green cancelModal' data-dismiss='modal' value='Cancel'>";
		echo "<input type='submit' class='btn btn-success' value='Save'>";
		echo "</form></div></div>";
	}	
?>