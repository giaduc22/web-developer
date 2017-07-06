<?php
// if(!isset($_SESSION['loginadmin'])){
// $_SESSION['mess']="Bạn chưa đăng nhập quản trị";
// header('Location:'.$_SERVER['HTTP_REFERER']);
// }
?>
<form id="form3" name="form3" method="post" action="exepostdanhmuc.php" enctype="multipart/form-data">
	<div class="table-responsive">
		<h3 class="tbltitle">Thêm mới Danh Mục</h3>
		<table class="table">
			<tr>
				<td>Tên Danh Mục</td>
				<td><input class="form-control" name="tendanhmuc" type="text" value="" placeholder="Ví dụ: Dưỡng thể"/></td>
			</tr>
			<tr>
				<td>Mã Danh Mục</td>
				<td><input class="form-control" name="maloai" type="text" value=""
					placeholder="Ví dụ: L10" /></td>
			</tr>
		</table>
		<button class="btn btn-primary pull-right" name="Smsua" type="submit">Thêm danh mục</button>
	</div>
</form>
