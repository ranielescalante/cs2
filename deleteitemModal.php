Are you sure you want to delete this item:
<br>
<?php
$index = $_POST['index'];
require 'connection.php';

$sql = "SELECT * FROM items WHERE id = '$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
extract($row);

?>
<div class="row">
	<div class="col-xs-12">
		<div class="card-image waves-effect waves-block waves-light">
			<img class="activator" src="<?php echo $image; ?>" style="height: 600px; width: 400px;">
		</div>

		<div class="card-content">
			<span class="card-title activator grey-text text-darken-4"><?php echo $name; ?><i class="material-icons right">more_vert</i></span><br>
			Php <?php echo $price; ?><br>
			<?php echo $description ?>
		</div>

		<a href='deleteitem.php?index=<?php echo $index; ?>'><button class="btn btn-danger">Yes</button></a> 
<input type='button' class='btn btn-danger modal-action modal-close waves-effect waves-green cancelModal' data-dismiss='modal' value='No'>
	</div>
</div>

<?php


?>
