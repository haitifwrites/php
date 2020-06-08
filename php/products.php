<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Dhannak Productions</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../styles/layout.css" type="text/css">
</head>

<body>
	<?php include "connection.php";?>
	<?php 
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:sign_in.php");
	die();
	}
	mysqli_query();
?>
	<div class="wrapper row1">
		<header id="header" class="clear">
			<div id="hgroup">
				<h1><a href="#">Dhannak Officials</a></h1>
				<h2>Local Business</h2>
			</div>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About USt </a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</header>
	</div>

	<div class="wrapper row2">
		<div id="container" class="clear">
			<section id="slider" class="clear">

				<h2>Dhannak Productions</h2>
			</section>
			<div id="Products">

				<section id="latest" class="last clear">
					<?php 
				$query = "select * from dhanak_product";
				$result = mysqli_query($link, $query);
				while ($row = mysqli_fetch_row($result)) {
					?>
					<article class="one_quarter">
						<figure><img src="<?php echo $row[0] ?>" width="215" height="100" alt="">
							<figcaption>
								<h2><?php echo $row[1] ?></h2>
								<p><?php echo $row[2] ?></p>
								<a href="edit.php">Edit</a> <br>
								<a href="">Delete</a>
							</figcaption>
							
						</figure>
						
					</article>
					<?php
					}
				?>

				</section>
				<!-- / One Quarter -->
			</div>
			<!-- / content body -->
		</div>
	</div>
	<!-- Footer -->
	<div class="wrapper row3">
		<footer id="footer" class="clear">
			<p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - Dhanak Officials</p>
		</footer>
	</div>
</body>

</html>