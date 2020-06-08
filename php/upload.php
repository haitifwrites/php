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
<h2>Upload Product</h2>

<?php
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<?php 
if(isset($_POST['submit'])) {
	$file = $_POST["file"];
	$title = $_POST["title"];
	$description = $_POST["desc"];
	$query = "INSERT INTO dhanak_product(file, title, description) VALUES ('$target_file', '$title', '$description')";
	$result = mysqli_query($link, $query);
}
?>

<div class="container">
	<form enctype="multipart/form-data" method="POST">
  <label for="file">Picture</label><br>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <label for="title">Title</label><br>
  <input class="form-control" type="text" id="title" name="title"><br>
  <label for="desc">Description</label><br>
  <input class="form-control" type="text" id="desc" name="desc"><br><br>
  <input type="submit" name="submit" value="submit">

</form> 
</div>

</body>
</html>


