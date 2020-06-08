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
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php 
	$query = "select * from signup_form where id='$id'";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_row($result)) {
?>

	<h2>Profile</h2>

	<table>
	  <tr>
		<th>Full Name</th>
		<th>User Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Password</th>
		<th>Confirm Password</th>
		<th>Other Detail</th>
		<th>Picture</th>
		<th>Edit / Delete</th>
	  </tr>			
	  <tr>
		<td><?php echo $row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><?php echo $row[3] ?></td>
		<td><?php echo $row[4] ?></td>
		<td><?php echo $row[5] ?></td>
		<td><?php echo $row[6] ?></td>
		<td><?php echo $row[7] ?></td>
		<td><?php echo $row[8] ?></td>
		<td><img src="<?php echo $row[0] ?>" width="100px" height="50px" alt=""></td>
		<td><a href="/edit_profile.php?id=<?php echo $id ?>">Edit</a> / <a href="/delete_profile.php?id=<?php echo $id ?>">Delete</a></td>
	  </tr>
	</table>
</body>
</html>