<?php


function display_title(){
  echo "My Account";
}

function display_content(){
require_once ('connection.php');
	$id = $_SESSION['id'];

		if (isset($_POST['save']))

		{

			$name = $_POST['name'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = sha1($_POST['password']);


			$sql = "UPDATE users SET name = '$name', address = '$address', email = '$email', password = '$password' WHERE id = '$id'";

			mysqli_query($conn, $sql);

			echo "<div class='alert alert-success center-align' style='margin-top: 20px; font-size:3em;'><strong>Saved Successfully!</strong></div>";

		}



	$sql = "SELECT * FROM users WHERE id='$id'";

	$show = mysqli_query($conn, $sql);

	if (mysqli_num_rows($show)>0) {
		while ($row = mysqli_fetch_assoc($show)){
			
		extract($row); 
		
	?>

	<div class='container' style="margin-bottom: 20%; margin-top: 5%; border: 2px solid #26a69a;">
		<form method='post' action='' class='container' style="margin-top: 5%;">

			<div class='col-md-4'>
				<label><b>Name</b></label>
				<input type='text' class='input' placeholder='Enter First Name' name='name' value='<?php echo $name?>'>
			</div>

			<div class='col-md-4'>
				<label><b>Email Address</b></label>
				<input type='email' class='input' placeholder='Enter Middle Name' name='email' value='<?php echo $email?>'>
			</div>				

			<div class='col-md-4'>
				<label><b>New Password</b></label>
				<input type='password' class='input' placeholder='New Password' name='password'>
			</div>								

			<div class='col-md-4'>	
				<label><b>Adrress</b></label>
				<input type='text' class='input' placeholder='Enter Username' name='address' value='<?php echo $address?>'>
			</div>

			<div class="center-align">
				<button id='saveu' type='submit' class='btn btn-danger' name='save' style="width: 30%;">Save</button>

				<a href="items.php" class='btn btn-danger' style="margin: 5%; width: 30%;">Cancel</a>
			</div>
		</form>						
	</div>
	
		<?php
			
		}
	}
}
require "template.php";

?>