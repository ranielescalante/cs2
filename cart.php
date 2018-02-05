<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<style type="text/css">
	
.cartEmpty{
		background-image: url(img/logo2.png); 
		background-size: cover; 
		background-repeat: no-repeat;
}

h4{
	margin-bottom: 5%; 
	margin-top: 5%; 
	color: #26a69a;
}

iframe {
	border: 2.5px solid #000; 
	margin: 10px;
	width: 970px;
	height: 600px;
}

@media only screen and (max-width : 992px){
	.thisBody{
		
		background-size: cover; 
		background-repeat: no-repeat;
	}

	iframe {
		width: 90%;
	}

}

@media only screen and (max-width : 600px){
	iframe {
		width: 90%;
		height: 50%;
	}

	.thisBody{
		
		background-size: cover; 
		background-repeat: no-repeat;
	}
}

</style>

<?php

function  display_title(){
	echo "Cart";
}

function display_content() {
	require 'connection.php';
	
	// $cartCount = $_SESSION['cart-index'];
	$total = 0;
	//for($i = 0; $i < count($_SESSION['cart']); $i++) {
	if(isset($_SESSION['cart'])){


	foreach ($_SESSION['cart'] as $key => $value) {
		$id = $value['id'];
		$name = $value['name'];
		$quantity = $value['quantity'];
		$price = $value['price'];
		$image = $value['image'];
		$subtotal = $price * $quantity; 
		$total += $subtotal; 

?>

<form method='post' action='add_to_cart.php' class="cartItems">
	<div class="center-align">
		<div class="card hoverable col s12 m4">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="<?php echo $image; ?>">
			</div>

			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4"><?php echo $name; ?></span>
				Php <?php echo $price; ?><br>
			</div>

			<!-- <input type='number' name='change_quantity' value="" style="width: 80%;"><br> -->
			<p class="center-align"><?php echo $quantity?></p>

			<a href='removetocart.php?index=<?php echo $id;?>&i=<?php echo $key; ?>'>
			<button type='button' class='btn btn-danger removeFromCart'>Remove From Cart</button></a>
		</div>
	</div>
</form>
		<?php
	}
	echo "<center><h3>Total: Php $total</h3></center>";
?>
<div class="center-align">
	<form method="POST" action="submit.php?total=<?php echo $total ?>" class="center-align">
		<button class="btn btn-success submitBtn">Submit</button>
	</form>
	<a href="items.php"><button class="btn btn-success continueBtn">Shop More</button></a>
</div>
<?php
}else {?>




<div class="cartEmpty">	
	<div class="center-align">
		<h4>No Items on cart yet!</h4>
	</div>

	<div class="center-align">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/5_lwJ9iU7y8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
</div>


			<?php }

		?>

	<?php
}

require 'template.php';

?>
