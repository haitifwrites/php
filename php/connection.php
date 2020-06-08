<?php 
	$servername ="localhost";
	$username ="root";
	$userpassword ="";
	$database ="dhanak";
	$link = mysqli_connect($servername,$username,$userpassword);
	if (!$link) {
    error_log("Failed to connect to MySQL: " . mysqli_error($link));
    die('Internal server error');
}
	$conn = mysqli_select_db($link, $database);
	if (!$conn) {
    error_log("Database selection failed: " . mysqli_error($link));
    die('Internal server error');}
	
?>