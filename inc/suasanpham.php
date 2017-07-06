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
<form id="form1" name="form1" method="post" action="exesanpham.php"
	enctype="multipart/form-data">
	<h3 class="tbltitle">Cập nhật sản phẩm</h3>
	<table width="205" border="1" align="center"
		background="anhphp/theme8.jpg">
		<tr>
			<td width="195">Mã Hàng</td>
			<td><?php echo $rows['mahang'];?>
	  <input name="mahang" type="hidden"
				value="<?php echo $rows['mahang']; ?>" /></td>
		</tr>
		<tr>
			<td width="195">Tên Sản phẩm</td>
			<td><input name="txtname" type="text"
				value="<?php echo $rows['tenhang'];?>" size="50" /></td>
		</tr>
		<tr>
			<td>URL</td>
			<td><input name="alias" type="text"
				value="<?php echo $rows['alias']; ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Giá tiền</td>
			<td><input name="txtgia" type="text"
				value="<?php echo $rows['giatien']; ?>" />đ</td>
		</tr>
		<tr>
			<td>Slogan</td>
			<td><textarea cols="50" rows="7" name="slogan">
			<?php echo $rows['slogan'];?>
	  </textarea></td>
		</tr>
		<tr>
			<td>Danh mục</td>
			<td><select id="txtml" name="txtml">
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
			</select></td>
		</tr>
		<tr>
			<td>Trọng lương</td>
			<td><input name="txtgr" type="text"
				value="<?php echo $rows['sogr1sp'];?>" /> Gram</td>
		</tr>
		<tr>
			<td>Chi tiết sản phẩm</td>
			<td><textarea cols="50" rows="7" name="chitiet">
			<?php echo $rows['chitiet'];?>
	  </textarea></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td><img src="images/sanpham/<?php echo $rows['hinhanh'];?>"
				width="200px" height="auto" /> <input type="file" name="txthinhanh" />
			</td>
		</tr>
		<tr>
			<td><label> <input name="Smsua" type="submit"
					class="button-red muatiep" value="Cập nhật thông tin" />
			</label></td>
		</tr>
	</table>
</form>