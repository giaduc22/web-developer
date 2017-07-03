<?php
// if(!isset($_SESSION['loginadmin'])){
// $_SESSION['mess']="Bạn chưa đăng nhập quản trị";
// header('Location:'.$_SERVER['HTTP_REFERER']);
// }
?>
<form id="form3" name="form3" method="post" action="exepostdanhmuc.php"
	enctype="multipart/form-data">
	<div align="center">
		<h3 class="tbltitle">Thêm mới Danh Mục</h3>
		<table width="205" border="1" align="center" background="">
			<tr>
				<td width="195">Tên Danh Mục</td>
				<td><input name="tendanhmuc" type="text" value=""
					placeholder="Ví dụ: Dưỡng thể" size="50" /></td>
			</tr>
			<tr>
				<td>Mã Danh Mục</td>
				<td><input name="maloai" type="text" value=""
					placeholder="Ví dụ: L10" /></td>
			</tr>
			<tr>
				<td><label> <input name="Smsua" class="button-red muatiep"
						type="submit" value="Thêm Danh Mục" />
				</label></td>
			</tr>
		</table>
	</div>
</form>