<?php
// mysql_query("SET NAMES utf8");
$maloai = isset($_GET['id']) ? $_GET['id'] : "";
$result = mysql_query("select * from loaisanpham where maloai='$maloai'");
$rows = @mysql_fetch_array($result);
if ($rows['maloai'] == "") {
    $_SESSION['mess'] = "Không tìm thấy danh mục";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
?>
<form id="form1" name="form1" method="post" action="exedanhmuc.php"
	enctype="multipart/form-data">
	<h3 class="tbltitle">Cập nhật Danh Mục</h3>
	<table width="205" border="1" align="center" background="">
		<tr>
			<td width="195">Mã Danh Mục</td>
			<td><?php echo $rows['maloai'];?>
	  <input name="maloai" type="hidden"
				value="<?php echo $rows['maloai']; ?>" /></td>
		</tr>
		<tr>
			<td width="195">Tên Danh Mục</td>
			<td><input name="txtname" type="text"
				value="<?php echo $rows['ten'];?>" size="50" /></td>
		</tr>
		<tr>
			<td><label> <input name="Smsua" type="submit"
					class="button-red muatiep" value="Cập nhật thông tin" />
			</label></td>
		</tr>
	</table>
</form>