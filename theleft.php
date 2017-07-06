<?php
require ("dbconnect.inc");
?>

<div>
	<form id="formtimkiem" class="form-inline" name="form1" method="post"
		action="index.php">
		<div class="form-group">
			<input class="form-control" type="text" placeholder="Tìm sản phẩm"
				name="timkiemsanpham" /> <input class="form-control" type="submit"
				name="Submit" value="Tìm kiếm" />
		</div>
	</form>
	<h3 class="active">Danh mục sản phẩm</h3>

	<ul class="nav nav-pills nav-stacked">
	<?php
$result = mysql_query("select * from loaisanpham");
while ($rows = mysql_fetch_array($result)) {
    ?>
		<li><a href="?action=danhmuc&id=<?php echo $rows['maloai'];?>"><?php echo $rows['ten'];?></a></li>
	<?php
}
?>
	</ul>
</div>
