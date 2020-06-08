<!DOCTYPE html>
<html>
<head>
<?php include "connection.php";?>
<?php 
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:sign_in.php");
	die();
	}
	mysqli_query();
?>
</head>
<body>
<?php 
	$query = "select * from signup_form where id='$id'";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_row($result)) {
?>
<?php 
	$query = "Delete from signup_form where id='$id'";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_row($result)) {
?>

</body>
</html>