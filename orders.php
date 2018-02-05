<style type="text/css">
.btn {
	width: 25%;
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

	a {
    margin-top: 10px;
	}


}
</style>
<?php

function  display_title(){
	echo "Order List";
}

function display_content() {
	require 'connection.php';
	
	?>

<ul class="collection with-header" style="margin-left: 15%; margin-right: 15%;">
 	<li class="collection-header"><h3>Order List History</h3></li>
 	<?php

 	$y = 1;

 	$sql = "SELECT * FROM users WHERE role = 'customer'";
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

 			echo "<div class='row'><div class='col s12 m6 l6'><h3 style='margin-left: 20px; color: #26a69a;'><strong>$oid</strong></h3></div>

 				<div class='col s12 m6 l6'><h3 style='margin-left: 20px; color: #26a69a;'><strong>$delistat</strong></h3></div></div>";

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
	    <img src="img/gallery/logo.jpg" alt="" class="circle">
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
	    <div class="row">
		    <form action="deliveryStatus.php?index=<?php echo $oid?>" method="post">
				    <p>
				      	<input class="with-gap" name="delstat" type="radio" id="dbtn<?php echo $y?>" value="delivered" />
						<label for="dbtn<?php echo $y?>">Delivered</label>

					    <input class="with-gap" name="delstat" type="radio" id="dbtn1<?php echo $y?>" value="pending"/>
					    <label for="dbtn1<?php echo $y?>">Pending</label>

					    <div class="col s12 m6 l6" style="width: 100%;">
						    <input type="submit" value="OK" class="btn">

						    <a href="deleteOrders.php?index=<?php echo $oid?>" class="btn">Confirmed</a>
					    </div>

				    </p>
				</form>
	    </div>
		 <br>
    </li>
 
		<?php
		$y++;
			}
		}

	}	
?>
    
</ul>



<ul class="collection with-header UserHeader" style="margin-left: 15%; margin-right: 15%;">
 	<li class="collection-header"><h3>User Lists</h3></li>
 	<?php

 	$x=1;

 	$sql4 = "SELECT * FROM users WHERE role = 'customer'";
 	$result2 = mysqli_query($conn,$sql4);
 	while($user = mysqli_fetch_assoc($result2)) {
 		$uname = $user['name'];
 		$uemail = $user['email'];
 		$uaddress = $user['address'];
 		$ustatus = ucfirst($user['status']);
 		$uid = $user['id'];

 	?>
    <li class="collection-item avatar">
    	<div class="row">
	    	<div class="col s12 m4 l4">
			    <div>
			    	<div >
				    	<div>
				    		<span><strong>Name: </strong><?php echo $uname ?></span><br>
				    	</div>

				    	<div>
				    		<span><strong>Email: </strong><?php echo $uemail ?></span><br>
				    	</div>

				    	<div>
				    		<span><strong>Address: </strong><?php echo $uaddress ?></span><br>
				    	</div>
			    	</div>
			    </div>
	    	</div>

	    	<div class="col s12 m4 l4">
		    	<div>
		    		<span><strong>Status:</strong> <?php echo $ustatus ?></span><br>
		    	</div>
	    	</div>

		    <div class="col s12 m4 l4 center-align">
		    	<form action="statusUser.php?index=<?php echo $uid?>" method="post">
				    <p>
				      	<input class="with-gap" name="useract" type="radio" id="ubtn<?php echo $x?>" value="active" />
    					<label for="ubtn<?php echo $x?>">Active</label>

					    <input class="with-gap" name="useract" type="radio" id="ubtn1<?php echo $x?>" value="inactive"/>
					    <label for="ubtn1<?php echo $x?>">Inactive</label>

					    <input type="submit" name="" value="OK" class="btn" id="btn2" style="width: 80%;">
				    </p>
				</form>
		    </div>
    	</div>
    </li>
 
<?php
	$x++;
	}
?>
    
</ul>



	<?php
	

}

require 'template.php';

?>
