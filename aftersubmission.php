<style type="text/css">
	
.thisBody{
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


function display_title(){
  echo "Order Sent";
}

function display_content(){

?>

<div class="thisBody">	
	<div class="center-align">
		<h4>Thank you for your order, You will receive and email regarding the order confirmation. Upon email confirmation the delivery will take 2 days to 1 week.</h4>
	</div>

	<div class="center-align">
		<iframe src="https://www.youtube.com/embed/5nUSlvocTks" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
</div>


<?php
}
require "template.php";

?>