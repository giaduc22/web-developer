<?php
// if(!isset($_SESSION['loginadmin'])){
// $_SESSION['mess']="Bạn chưa đăng nhập quản trị";
// header('Location:'.$_SERVER['HTTP_REFERER']);
// }
?>
<form id="form3" name="form3" method="post" action="exepostitem.php"
	enctype="multipart/form-data">
	<div align="center">
		<h3 class="tbltitle">Thêm mới sản phẩm</h3>
		<table width="205" border="1" align="center" background="">
			<tr>
				<td width="195">Tên sản phẩm</td>
				<td><input name="txtname" type="text" value="" size="50" /></td>
			</tr>
			<tr>
				<td>Giá tiền</td>
				<td><input name="txtgia" type="text" value="" />đ</td>
			</tr>
			<tr>
				<td>Slogan</td>
				<td><textarea cols="50" rows="7" name="slogan"></textarea></td>
			</tr>
			<tr>
				<td>Danh Mục</td>
				<td><select id="txtml" name="txtml">
					<?php
    $results = mysql_query("select * from loaisanpham");
    while ($rowsi = mysql_fetch_assoc(@$results)) {
        
        ?>
						<option value="<?php echo $rowsi['maloai'];?>"><?php echo $rowsi['ten'];?></option>
					<?php
    }
    ?>
				</select></td>
			</tr>
			<tr>
				<td>Trọng lượng</td>
				<td><input name="txtgr" type="text" value="" /> Gram</td>
			</tr>
			<tr>
				<td>Chi tiết</td>
				<td><textarea cols="50" rows="7" name="chitiet"></textarea></td>
			</tr>
			<tr>
				<td>Hình ảnh</td>
				<td><input type="file" name="txthinhanh" /></td>
			</tr>
			<tr>
				<td><label> <input name="Smsua" class="button-red muatiep"
						type="submit" value="Thêm sản phẩm" />
				</label></td>
			</tr>
		</table>
	</div>
</form>