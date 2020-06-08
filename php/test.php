<?php include "connection.php" ?>

<?php 
if(isset($_POST['submit'])) {
	echo "found";
}
?>

<!DOCTYPE html>
<html>
<body>



<h2>Basic HTML Table</h2>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Email</th> 
    <th>Password</th>
    <th>Confirm Password</th>
  </tr>
  <tr>
    <td><?php echo $_POST["name"]; ?></td>
    <td><?php echo $_POST["email"] ?></td>
    <td><?php echo $_POST["pass"]?></td>
    <td><?php echo $_POST["cpass"]?></td>
  </tr>
</table>

</body>
</html>