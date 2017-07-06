<?php
$maloai = isset($_GET["ml"]) ? $_GET["ml"] : "";
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = @mysql_query("select * from sanpham where mahang='$id'");
    $rows = mysql_fetch_array($result);
    ?>


<div>
	<h1><?php echo $rows['tenhang'];?></h1>
	<p><?php echo $rows['slogan'];?></p>
	<div class="row">
		<div class="col-md-6">
			<img title="<?php echo $rows['tenhang'];?>"
				src="images/sanpham/<?php echo $rows['hinhanh'];?>"
				alt="<?php echo $rows['tenhang'];?>" width="100%" height="100%" />
		</div>
		<div class="col-md-6">
			<div class="card text-center">
				<h3 class="card-header">Mã SP: <?php echo $rows['mahang'];?></h3>
				<div class="card-block">
					<h4 class="card-title">Giá: <?php echo $rows['giatien'];?> đ</h4>
					<p class="card-text">Trọng lượng: <?php echo $rows['sogr1sp'];?> gram</p>
					<form name="adminForm" id="adminForm" method="post">
						<a href="muahang.php?id=<?php echo $rows['mahang'];?>"
							onclick="mua()" class="btn btn-primary"> Mua Ngay </a>
					</form>
				</div>
				<div class="card-footer text-muted"></div>
			</div>
		</div>
	</div>
	<div class="thongtin">
    <?php echo $rows['chitiet'];?>
  </div>
</div>


<?php
}
?>
