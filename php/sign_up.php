<!DOCTYPE html>
<html>
<body>
<?php include "connection.php";?>
<h2>Sign Up</h2>
<?php 
if(isset($_POST['submit'])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$cpass = $_POST["cpass"];
	$query = "INSERT INTO user_sign_up(user_name, user_email, user_pass, user_cpass) VALUES ('$name', '$email', '$pass', '$cpass')";
	$result = mysqli_query($link, $query);
}



?>
<form name="form" action="" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="pass">Password:</label><br>
  <input type="password" pattern="{3} id="pass" name="pass"><br>	
  <label for="cpass">Confirm Password:</label><br>
  <input type="password" pattern="{3} id="cpass" name="cpass"><br><br>
  <button type="submit">Submit</button>
</form>

</body>