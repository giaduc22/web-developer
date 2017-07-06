<?php
// mysql_query("SET NAMES utf8");
$mahang = isset($_GET['id']) ? $_GET['id'] : "";
$result = mysql_query("select * from sanpham where mahang='$mahang'");
$rows = @mysql_fetch_array($result);
if ($rows['mahang'] == "") {
    $_SESSION['mess'] = "Không tìm thấy sản phẩm";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
?>


<form id="form1" name="form1" method="post" action="exesanpham.php" enctype="multipart/form-data">
  <div class="table-responsive">
	<h3>Cập nhật sản phẩm</h3>
	<table class="table">
		<tr>
			<td>Mã Hàng</td>
			<td><?php echo $rows['mahang'];?><input class="form-control" name="mahang" type="hidden" value="<?php echo $rows['mahang']; ?>" /></td>
		</tr>
		<tr>
			<td>Tên Sản phẩm</td>
			<td><input class="form-control" name="txtname" type="text"	value="<?php echo $rows['tenhang'];?>" /></td>
		</tr>
		<tr>
			<td>URL</td>
			<td><input class="form-control" name="alias" type="text"	value="<?php echo $rows['alias']; ?>" /></td>
		</tr>
		<tr>
			<td>Giá tiền</td>
			<td><input class="form-control" name="txtgia" type="text" value="<?php echo $rows['giatien']; ?>" /></td>
		</tr>
		<tr>
			<td>Slogan</td>
			<td><textarea class="form-control" name="slogan"><?php echo $rows['slogan'];?></textarea></td>
		</tr>
		<tr>
			<td>Danh mục</td>
			<td>
        <select class="form-control" id="txtml" name="txtml">
          <?php
          $results = mysql_query("select * from LoaiSanPham");
          while ($rowsi = mysql_fetch_assoc(@$results)) {
          $seleced = "";
          if ($rows['maloai'] == $rowsi['maloai']) {
          $seleced = "selected";
          }
          ?>
          <option <?php echo $seleced; ?>
          value="<?php echo $rowsi['maloai'];?>"><?php echo $rowsi['ten'];?></option>
          <?php
          }
          ?>
			   </select>
      </td>
		</tr>
		<tr>
			<td>Trọng lương</td>
			<td><input class="form-control" name="txtgr" type="text" value="<?php echo $rows['sogr1sp'];?>" /></td>
		</tr>
		<tr>
			<td>Chi tiết sản phẩm</td>
			<td><textarea class="form-control" name="chitiet"><?php echo $rows['chitiet'];?></textarea></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td>
        <img class="" src="images/sanpham/<?php echo $rows['hinhanh'];?>" width="auto" height="auto" />
        <input type="file" name="txthinhanh" />
			</td>
		</tr>
	</table>
  <button class="btn btn-primary pull-right" name="Smsua" type="submit">Cập nhật thông tin</button>
</div>
</form>
