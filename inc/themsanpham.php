<?php
// if(!isset($_SESSION['loginadmin'])){
// $_SESSION['mess']="Bạn chưa đăng nhập quản trị";
// header('Location:'.$_SERVER['HTTP_REFERER']);
// }
?>
<form id="form3" name="form3" method="post" action="exepostitem.php" enctype="multipart/form-data">
	<div class="table-responsive">
		<h3 class="tbltitle">Thêm mới sản phẩm</h3>
		<table class="table">
			<tr>
				<td>Tên sản phẩm</td>
				<td><input class="form-control" name="txtname" type="text" value="" size="50" /></td>
			</tr>
			<tr>
				<td>Giá tiền</td>
				<td><input class="form-control" name="txtgia" type="text" value="" /></td>
			</tr>
			<tr>
				<td>Slogan</td>
				<td><textarea class="form-control" cols="50" rows="7" name="slogan"></textarea></td>
			</tr>
			<tr>
				<td>Danh Mục</td>
				<td><select class="form-control" id="txtml" name="txtml">
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
				<td><input class="form-control" name="txtgr" type="text" value="" /></td>
			</tr>
			<tr>
				<td>Chi tiết</td>
				<td><textarea class="form-control" name="chitiet"></textarea></td>
			</tr>
			<tr>
				<td>Hình ảnh</td>
				<td><input type="file" name="txthinhanh" /></td>
			</tr>

		</table>
		<button class="btn btn-primary pull-right" name="Smsua" type="submit">Thêm sản phẩm</button>
	</div>
</form>
