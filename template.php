<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

<?php require "partials/head.php";?>

	<title><?php display_title();?></title>
</head>

<body>

<?php require "partials/navigation.php";?>

<main>
	<?php display_content();?>
</main>
	



<?php require "partials/footer.php"; ?>

</body>

</html>