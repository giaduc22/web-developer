<div id="menu">
	<ul class="main">
		<li><a href="index.php"><strong>Trang chủ</strong></a></li>
	<?php
if (! isset($_SESSION['username'])) {
    ?>
    <li><div align="center">
				<a href="?action=dangnhap"><strong>Đăng nhập</strong></a></li>
		<li><div align="center">
				<a href="?action=dangky"> <strong>Đăng ký</strong>
				</a></li>
    <?php
} else {
    ?>
	 <li><div align="center">
				<a href="?action=exit"><strong>Thoát</strong></a></li>
	 <?php
    if (! isset($_SESSION['loginadmin'])) {
        ?>
		 <li><div align="center">
				<a href="gio-hang.html"><strong>Giỏ hàng</strong> - <i><?php if(isset($_SESSION["hang"])){echo count($_SESSION["hang"]);}?></i>
					SP</a></li>
		<li><div align="center">
				<a href="don-hang.html"><strong>Đơn hàng</strong></a></li>
		 <?php
    }
    ?>
	
	<?php
}
?>
	<?php
if (isset($_SESSION['loginadmin'])) {
    ?>
	 <li><div align="center">
				<a href="?action=qldanhmuc"> <strong>Danh Mục</strong>
				</a></li>
		<li><div align="center">
				<a href="?action=qlsanpham"> <strong>Sản Phẩm</strong>
				</a></li>
  <?php
}
?>
	 <li><div align="center">
				<a href="?action=contact"> <strong>Liên hệ</strong>
				</a></li>
	</ul>
	<form id="formtimkiem" name="form1" method="post" action="index.php">
		<div align="center">
			<input type="text" placeholder="Tìm sản phẩm" name="timkiemsanpham" />
			<input type="submit" name="Submit" value="Tìm kiếm" />
		</div>
	</form>
</div>
