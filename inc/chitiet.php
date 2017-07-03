<?php
$maloai = isset($_GET["ml"]) ? $_GET["ml"] : "";
if ($_GET['id']) {
    $id = $_GET['id'];
    $result = @mysql_query("select * from SanPham where mahang='$id'");
    $rows = mysql_fetch_array($result);
    ?>
<div class="chitietsanpham">
	<h1 class="detail_h1"><?php echo $rows['tenhang'];?></h1>
	<p class="detail-home-text home-text"><?php echo $rows['slogan'];?></p>
	<div class="col-md-6 image-view ">
		<div style="position: relative; width: 365px;" class="bx-clone">
			<div class="chitietcodesp">
				<b>Mã SP: <?php echo $rows['mahang'];?></b>
			</div>
			<img style="border: 1px solid;"
				title="<?php echo $rows['tenhang'];?>"
				src="images/sanpham/<?php echo $rows['hinhanh'];?>"
				alt="<?php echo $rows['tenhang'];?>">

		</div>
	</div>
	<div class="col-md-6 info">
		<div class="kmprice">
			<span class="new-price"><?php echo $rows['giatien'];?> đ</span>
		</div>
		<div class="totalmua">
			<div class="btn-idsp">
				<button class="button-idsp">Mã SP: <?php echo $rows['mahang'];?></button>
			</div>
			<div class="btn-idsp">
				<button class="button-idsp">Trọng lượng: <?php echo $rows['sogr1sp'];?> gram</button>
			</div>
			<div class="btn-mua">
				<form name="adminForm" id="adminForm"
					action="muahang.php?muahang=<?php echo $rows['mahang'];?>"
					method="post">
					<div class="buyitem">
						<a href="#" onclick="mua()">
							<button class="button-red">
								<i class="fa fa-shopping-cart"></i> Mua Ngay
							</button>
						</a>
					</div>
				</form>

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
