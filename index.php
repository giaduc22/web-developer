<?php
require ("dbconnect.inc");
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Website bán hàng mỹ phẫm Online Giá Rẻ - Chất Lượng Cao</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	</head>

	<body>

		<div class="container">
<!-- Top Header -->
			<header>
				<img class="img-responsive" src="images/banner.png" width="100%" height="auto" />
			</header>

<!--Header Menu-->
			<nav>
	    	<?php include("header.php");?>
	  	</nav>


				<?php
					if (isset($_SESSION['mess']) && $_SESSION['mess'] != "") {
		    ?>
				<div class='message' id='message'>
					<h3>Thông báo</h3>
					<a onclick="jQuery('#message').css('display','none')"
						href="javascript:void()">X</a>
					<span><?php echo $_SESSION['mess'];?></span>
				</div>
				<?php

		    unset($_SESSION['mess']);
				}
				?>

<!--Content -->
				<div class="row">
					<div class="col-md-9">
						<?php include("themain.php");?>
					</div>
					<div class="col-md-3">
						<?php include("theleft.php");?>
					</div>
				</div>

<!--Footer -->
				<footer class="row">
					<?php include("footer.php");?>
				</footer>

		</div>
	</body>
</html>
