<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../styles/bootstrap.css" type="text/css">
</head>
<body>
<?php include "connection.php";?>
	<?php 
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:sign_in.php");
	die();
	}
?>

<div class="container">
<br>
<br>
<br>
	<h2>Welcome To Dhanak Admin Pannel</h2>
	<br><br>
	<div class="row">
		<div class=""><a href="upload.php">Add Product</a></div>&nbsp&nbsp&nbsp&nbsp
		<br>
		<br>
		<div class=""><a href="view_product.php">View Product</a></div>
	</div>
</div>

</body>
</html>


