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
<table width="725" border="1" background="">
	<h3 class="tbltitle">Quản lý sản phẩm</h3>
	<input name="Smsua" type="button"
		onclick="window.location='?action=themsanpham';"
		class="button-red muatiep" value="Thêm mới sản phẩm" />
	<tr>
		<td width="65"><div align="left">Mã SP</div></td>
		<td width="100"><div align="left">Tên sản phẩm</div></td>
		<td width="80"><div align="left">Giá bán</div></td>
		<td width="80"><div align="left">Phân loại</div></td>
		<td width="80"><div align="left">Trọng lương</div></td>
		<td width="80"><div align="left">Hình ảnh</div></td>
		<td width="80"><div align="left">Chi tiết</div></td>
	</tr>
<?php
$result = mysql_query("select * from SanPham order by mahang desc limit " . $start . "," . $limit);
while ($rows = mysql_fetch_array($result)) {
    ?>
  <tr>
		<td><div align="left"><?php echo $rows['mahang'];?></div></td>
		<td><div align="left">
				<a href="?action=chitiet&id=<?php echo $rows['mahang']; ?>"><?php echo $rows['tenhang']; ?></a>
			</div></td>
		<td><div align="left"><?php echo $rows['giatien'];?></div></td>
		<td><div align="left"><?php echo $rows['maloai'];?></div></td>
		<td><div align="left"><?php echo $rows['sogr1sp'];?></div></td>
		<td><div align="left">
				<img width="120px" height="auto"
					src="images/sanpham/<?php echo $rows['hinhanh'];?>" />
			</div></td>
		<td><div align="left">
				<a href="?action=suasanpham&id=<?php echo "$rows[0]";?>">Sửa</a>&nbsp;&nbsp;
				<a href="exexoasp.php?id=<?php echo "$rows[0]";?>">Xóa</a>
			</div></td>
	</tr>
 <?php
}
?>
 <tr>
		<td colspan="7"> <?php
echo $paging->pagesList($curpage);
?>
	 </td>
	</tr>
</table>