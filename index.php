<?php
require ("dbconnect.inc");
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<meta charset="UTF-8">
	<title>Website bán hàng mỹ phẫm Online Giá Rẻ - Chất Lượng Cao</title>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/favicon.ico"
			type="image/x-icon" />

</head>
<body bgcolor="#F3F3F3">
	<div class="body">
		<div class="banner">
			<img src="images/banner.png" width="100%" height="auto" />
		</div>
		<div class="hearder">
    <?php include("header.php");?>
  </div>
		<div class="wapper">
	<?php
if (isset($_SESSION['mess']) && $_SESSION['mess'] != "") {
    ?>
		<div class='message' id='message'>
				<h3>Thông báo</h3>
				<a onclick="jQuery('#message').css('display','none')"
					href="javascript:void()">X</a><span><?php echo $_SESSION['mess'];?></span>
			</div>
	<?php
    
    unset($_SESSION['mess']);
}
?>
    <div class="wleft"><?php include("theleft.php");?></div>
			<div class="wright"><?php include("themain.php");?></div>
			<div class="fter"><?php include("footer.php");?></div>
		</div>
	</div>
</body>
</html>
