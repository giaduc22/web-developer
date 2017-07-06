<?php
if (! isset($_SESSION['loginadmin'])) {
    ?>
<script>
	alert('Bạn không có quyền truy cập trang');
	window.location="index.php";
	</script>
<?php
}

include ("clspage.php");
$paging = new Paging();
$limit = 50;
// Tổng số mẫu tin
$paging->findTotal($link, 'sanpham');
// Tổng số trang
$paging->findPages($limit);
// Bắt đầu từ mẫu tin
$start = $paging->rowStart($limit);
// Trang hiện tại
$curpage = ($start / $limit) + 1;

?>



<div class="table-responsive">
	<h3>Quản lý sản phẩm</h3>
	<table class="table">
		<thead>
			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Phân loại</th>
				<th>Trọng lượng</th>
				<th>Hình ảnh</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>

    <?php
    $result = mysql_query("select * from sanpham order by mahang desc limit " . $start . "," . $limit);
    while ($rows = mysql_fetch_array($result)) {
        ?>
      <tr>
			<td><?php echo $rows['mahang'];?></td>
			<td><a href="?action=chitiet&id=<?php echo $rows['mahang']; ?>"><?php echo $rows['tenhang']; ?></a></td>
			<td><?php echo $rows['giatien'];?></td>
			<td><?php echo $rows['maloai'];?></td>
			<td><?php echo $rows['sogr1sp'];?></td>
			<td><img width="120px" height="auto"
				src="images/sanpham/<?php echo $rows['hinhanh'];?>" /></td>
			<td><a href="?action=suasanpham&id=<?php echo "$rows[0]";?>">Sửa</a></td>
			<td><a href="exexoasp.php?id=<?php echo "$rows[0]";?>">Xóa</a></td>
		</tr>
     <?php
    }
    ?>
    <button class="btn btn-primary pull-right" name="Smsua"
  		onclick="window.location='?action=themsanpham';">Thêm sản phẩm</button>
  </table>

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
