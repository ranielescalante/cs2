<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<?php

function display_title(){
  echo "Items";
}

function display_content(){
$user = "";
    if(isset($_SESSION['name'])){
      $user = $_SESSION['name'];
    }


require 'connection.php';

?>

<h2 class="center-align" style="font-family: 'Monoton', cursive;">WELCOME</h2>

<div class="row">
	<div class="col xs12 l8 itemBtns" style="padding-left: 20px;">
		<?php
		$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($conn,$sql);
			echo "<div class='col xs12 l4 center-align'>";
			echo "<label>Categories</label>";
			echo "<form><select name='category' class='browser-default1'>";
			echo "<option>All</option>";
			while($row = mysqli_fetch_assoc($result)){
				$id = $row['id'];
				$category = $row['category_name'];
				if($filter == $category)
					echo "<option selected>$category</option>";
				else
					echo "<option value='$id'>$category</option>";
			
		}
		echo "</select>";
		
		echo "<button class='btn grey btnSearch'>Search</button></form><br><br>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col xs12 l4 btnAddItem'>";	
		if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
		echo "<label>Admin Add Item</label><br>";
		// echo "<button class='btn btn-success' id='add_item' style='width: 40%;'>Add Item</button>";
		echo "<a class='waves-effect waves-light btn modal-trigger btnAdd' href='#modal1' id='add_item'>Add Item</a>";
		}
		?>	
		

	</div>
</div>

<div class="row">
	
<?php 	


$sql = "SELECT * FROM items";
$result = mysqli_query($conn,$sql);
while($item = mysqli_fetch_assoc($result)) { 
	if($filter == 'All' || $item['category_id'] == $filter){ ?>
	
		<div class="card hoverable col s12 l3">
	    	<div class="card-image waves-effect waves-block waves-light">
	      		<img class="activator" src="<?php echo $item['image']; ?>">
	    	</div>

		    <div class="card-content">
		      <span class="card-title activator grey-text text-darken-4 center-align"><?php echo $item['name']; ?><i class="material-icons right">more_vert</i></span>
		      <div class="center-align">Php <?php echo $item['price']; ?></div><br>

		      <?php
		      if(isset($_SESSION['name']) && $_SESSION['role'] == 'admin'){
					echo "<div class='center-align'>";
					echo '<a class="waves-effect waves-light btn modal-trigger edit_modal_body" href="#modal3" data-index="'.$item['id'].'" style="width: 40%; margin:5px; padding: 0;">Edit</a>';

					echo '<a class="waves-effect waves-light btn modal-trigger delete_modal_body" href="#modal2" data-index="'.$item['id'].'" style="width: 40%; margin:5px; padding: 0;">Delete</a>';
					echo "</div>";
				}
				else if(isset($_SESSION['name'])){
				echo "<form method='POST' action='add_to_cart.php'>";
				echo '<input type="hidden" name="id" value="'.$item['id'].'">';
				echo '<input type="hidden" name="name" value="'.$item['name'].'">';
				echo '<input type="hidden" name="price" value="'.$item['price'].'">';
				echo '<input type="hidden" name="image" value="'.$item['image'].'">';
				echo "<input type='number' name='quantity' required min=1>";
				echo "<div class='center-align'><button class='btn btn-success'>Add to Cart</button></div>";
				echo "</form>";
				}

		      ?>
		    </div>

	    	<div class="card-reveal">
	      		<span class="card-title grey-text text-darken-4"><?php echo $item['name']; ?><i class="material-icons right">close</i></span>
	      		<p><?php echo $item['description']; ?></p>
	    	</div>
	  	</div>
	<?php }
	 } ?>
	</div>
</div>

<!-- edit modal -->


  <!-- Modal Structure -->
<?php
echo "<div id='modal1' class='modal center-align'>
    	<div class='modal-content'>
      		<h4>The Good Life Crew</h4>
      		<div class='modal-body' id='modal-body'>
	   </div>
    </div>
  </div>";

echo "<div id='modal2' class='modal center-align'>
    <div class='modal-content'>
      		<h4>The Good Life Crew</h4>
      		<div class='deletemodal-body' id='modal-body'>
	   </div>
    </div>
  </div>";

 echo "<div id='modal3' class='modal center-align'>
    <div class='modal-content'>
      <h4>The Good Life Crew</h4>
      <div class='editmodal-body' id='modal-body'>
	   </div>
    </div>
  </div>";

?>  

<?php

}
require "template.php";

?>
