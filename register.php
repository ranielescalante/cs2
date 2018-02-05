<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<?php

function display_title(){
  echo "Sign Up/ Sign In";
}

function display_content(){
?>

<div class="reg_container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12" >
		<form class="col s12" action="authentication.php" method="POST">
			<div class="form-container">
				<h3 class="teal-text">Hello</h3>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate" name="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="password">
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Connect</button>
					<br>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form class="col s12" id="reg-form" action="regendpoint.php" method="POST">
			<div class="form-container formdisable">
				<h3 class="teal-text">Welcome</h3>
				<div class="row">
					<div class="input-field col s6">
						<input id="user_name" type="text" class="validate" name="username">
						<label for="user_name">Full Name</label>
					</div>
					<div class="input-field col s6">
						<input id="regemail" type="email" class="validate" name="email">
						<label for="regemail">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="address" type="text" class="validate" name="address">
						<label for="address">Address</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="regpassword" type="password" class="validate" name="password">
						<label for="regpassword">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" class="validate">
						<label for="password-confirm">Password Confirmation</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action" id="submitBtn">Submit</button>
				</center>
			</div>
		</form>
	</div>
</div>

<?php

}
require "template.php";

?>