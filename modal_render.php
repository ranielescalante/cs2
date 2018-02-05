<?php
	// 

	require 'connection.php';

	if(isset($_POST['add'])){
		
		echo "<div class='row'>";
		echo "<div class='col-xs-4 item_display'><form action='additem.php' method='post' enctype='multipart/form-data'>";
		echo "Name: <input type='text' name='name'><br>";
		echo "Description: <textarea name='description'></textarea><br>";
		echo "Image: <input type='file' name='image'><br>";
		echo "Price: Php <input type='number' name='price' min=0 ><br>";
		echo "<select name='category_id' class='browser-default'><option>--Select Category</option>";
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			extract($row);
			echo "<option value='$id'>$category_name</option>";
		}
		echo "</select><br>";
		echo "<input type='button' class='btn btn-danger modal-action modal-close waves-effect waves-green cancelModal' data-dismiss='modal' value='Cancel'>";
		echo "<input type='submit' name='submit' class='btn btn-success' value='Add Item'>";
		echo "</form></div></div>";
	}


	
?>