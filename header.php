<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Trang chủ</a></li>

				<?php
    if (! isset($_SESSION['loginadmin']) && isset($_SESSION['username'])) {
        ?>
					<li><a href="?action=giohang">Giỏ hàng - <i><?php if(isset($_SESSION["hang"])){echo count($_SESSION["hang"]);}?></i>SP
				</a></li>
				<li><a href="?action=donhangcuaban">Đơn hàng</a></li>
				<?php
    }
    ?>

				<?php
    if (isset($_SESSION['loginadmin'])) {
        ?>
					<li><a href="?action=qldanhmuc">Danh mục</a></li>
				<li><a href="?action=qlsanpham">Sản phẩm</a></li>
				<li><a href="?action=qldonhang">Đơn hàng</a></li>
				<?php
    }
    ?>
					<li><a href="?action=contact">Liên hệ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
    if (! isset($_SESSION['username'])) {
        ?>
					<li><a href="?action=dangky">Đăng ký</a></li>
				<li><a href="?action=dangnhap"><span
						class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
				<?php
    } else {
        ?>
					<li><a href="?action=exit">Thoát</a></li>
				<?php
    }
    ?>
			</ul>
		</div>
	</div>
</nav>
