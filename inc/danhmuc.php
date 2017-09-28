<?php
$maloai = isset($_GET["id"]) ? $_GET["id"] : "";
$timkiem = isset($_POST["timkiemsanpham"]) ? $_POST["timkiemsanpham"] : "";
$dk = "";
if ($maloai) {
    $dk = "where maloai='$maloai'";
}
if ($timkiem) {
    $dk = "where tenhang like '%$timkiem%' or mahang='$timkiem'";
}

include ("clspage.php");
$paging = new Paging();
$limit = 10;
// Tổng số mẫu tin
$paging->findTotal($link, 'sanpham');
// Tổng số trang
$paging->findPages($limit);
// Bắt đầu từ mẫu tin
$start = $paging->rowStart($limit);
// Trang hiện tại
$curpage = ($start / $limit) + 1;

$result = @mysql_query("select * from sanpham $dk order by mahang desc limit " . $start . "," . $limit);
if ($timkiem != "" && mysql_num_rows($result) == 0) {
    $_SESSION['mess'] = "Không tìm thấy sản phẩm :[" . $timkiem . "] Vui lòng tìm lại!";
    return header('Location:index.php');
}
?>



<form id="form1" name="form1" method="post" action="">
	<div class="row">
		<ul class="list-group">
      <?php
    while ($rows = mysql_fetch_array($result)) {
        $link = "?action=chitiet&id=" . $rows['mahang'];
        ?>
      <div class="col-md-4">
				<li class="list-group-item">
					<div class="card">
						<img class="card-img-top"
							src="images/sanpham/<?php echo $rows['hinhanh'];?>"
							alt="<?php echo $rows['tenhang'];?>" width="100%" height="100%">
						<div class="card-block">
							<h4 class="card-title"><?php echo $rows['tenhang'];?></h4>
							<p class="card-text"><?php echo number_format($rows['giatien']);?> đ</p>
							<a href="<?php echo $link;?>" class="btn btn-primary">Xem chi
								tiết</a>
						</div>
					</div>
				</li>
			</div>

      <?php
    }
    ?>
    </ul>
	</div>

	<div class="row">
		<div class="col-md-9 col-md-offset-3">
			<ul class="pagination pagination-sm">
          <?php
        echo $paging->pagesList($curpage);
        ?>
      </ul>
		</div>
	</div>

</form>
