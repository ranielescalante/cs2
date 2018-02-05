<style type="text/css">
.btn {
	width: 25%;
}

body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto !important;
  }

@media only screen and (max-width : 992px) {
  .btn {
		width: 35%;
	}


}

@media only screen and (max-width : 600px) {
	ul {
		width: 100%;
		margin-left: 0!important;
		margin-right: 0!important;
	}

	.btn {
		width: 80%;
	}


}
</style>

<?php

function  display_title(){
	echo "Order History";
}

function display_content() {
	require 'connection.php';
	$myuser = $_SESSION['id'];
	?>

<ul class="collection with-header" style="margin-left: 15%; margin-right: 15%;">
 	<li class="collection-header"><h3>Order List History</h3></li>
 	<?php


 	$sql = "SELECT * FROM users WHERE id = '$myuser'";
 	$result = mysqli_query($conn,$sql);
 	while($item = mysqli_fetch_assoc($result)) {
 		$oname = $item['name'];
 		$oemail = $item['email'];
 		$oaddress = $item['address'];

 		$sql1 = "SELECT * FROM final_userorder ";
 		$result1 = mysqli_query($conn,$sql1);
 		while($purid = mysqli_fetch_assoc($result1)) {
 			$oid = $purid['id'];
 			$delistat = ucfirst($purid['delivery_status']);
 			$totalprice = $purid['total_price'];

 			$sql2 = "SELECT * FROM final_order WHERE email = '$oemail' AND purchase_id = '$oid'";
 			$result2 = mysqli_query($conn,$sql2);
 			while($order = mysqli_fetch_assoc($result2)) {

 			echo "<div class='row'><div class='col s12 m6 l6'><h3 style='margin-left: 20px; color: #26a69a;'><strong>$delistat</strong></h3></div></div>";

 				$itemid = $order['item_id'];
 				$dateordered = $order['order_time'];
 				$timestamp = date('F j, Y, g:i a',strtotime($dateordered));

 				$sql3 = "SELECT * FROM items WHERE id = '$itemid'";
 				$result3 = mysqli_query($conn,$sql3);
 				$row = mysqli_fetch_assoc($result3);
 				$itemname = $row['name'];
 				$itemprice = $row['price'];
 	?>
    <li class="collection-item avatar">
	    <div>
	    	<div>
		    	<div>
		    		<span><strong>Name: </strong><?php echo $oname ?></span><br>
		    	</div>

		    	<div>
		    		<span><strong>Email: </strong><?php echo $oemail ?></span><br>
		    	</div>

		    	<div>
		    		<span><strong>Address: </strong><?php echo $oaddress ?></span><br>
		    	</div>
	    	</div>
	    	<br>
	    	<hr>
	    	<br>
	    	<div>
		    	<div>
		    		<span><strong>Item Name: </strong><?php echo $itemname ?></span><br>
		    	</div>

		    	<div>
		    		<span><strong>Item Price: </strong><?php echo $itemprice ?></span><br>
		    	</div>
	    	</div>
	    	<br>
	    	<hr>
	    	<br>
	    	<div>
		    	<div>
		    		<span><strong>Date Ordered: </strong><?php echo $timestamp ?></span><br>
		    	</div>

		    	<div>
		    		<span><strong>Amount Due: </strong><?php echo $totalprice ?></span><br>
		    	</div>
	    	</div>
	    	
	    </div>
	    <br>
    </li>
 
		<?php

			}
		}	
	}	
?>
    
</ul>

	<?php
	

}

require 'template.php';

?>
