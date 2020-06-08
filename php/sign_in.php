<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../styles/bootstrap.css" type="text/css">
</head>
<body>
<?php include "connection.php";?>

<?php 
session_start();
if(isset($_POST['submit'])) {
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$query = "Select * from user_sign_up where user_email = '$email' and user_pass = '$pass' ";
	$result = mysqli_query($link, $query);
	$a = mysqli_fetch_row($result);
	if(isset($a[0])){
		$_SESSION["auth"] = true;
		header("Location:welcome.php");
	}
	else{ 
		$_SESSION["auth"] = False;
		$error = ("Enter Correct Credentials");
		
?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"><span style="color:#FF0000;text-align:center;"><?php echo $error?></span></div>
		<div class="col-md-4"></div>
	</div>
	
<?php
	}
}
?>
<br><br>
<div class="container">
	<h2>Sign In</h2>
	<form action="" method="POST">
		<label for="email">Email:</label><br>
		<input class="form-control" type="email" id="email" name="email"><br>
		<label for="pass">Password:</label><br>
		<input class="form-control" type="password" id="pass" name="pass"><br><br>
		<input class="btn btn-primary" type="submit" name="submit" value="submit">
	</form>
</div>

</body>