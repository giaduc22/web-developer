<?php
require ("dbconnect.inc");
?>

<div class="span3 bs-docs-sidebar">
	<form id="formtimkiem" class="form-inline" name="form1" method="post"
		action="index.php">
		<div class="form-group row">
			<input class="form-control" type="text" placeholder="Tìm sản phẩm" name="timkiemsanpham" />
			<button class="btn btn-primary" type="submit"	name="Submit">Tìm kiếm</button>
		</div>
	</form>

	<h3 class="active">Danh mục sản phẩm</h3>

	<ul class="nav nav-list">
	<?php
$result = mysql_query("select * from loaisanpham");
while ($rows = mysql_fetch_array($result)) {
    ?>
		<li>
			<a href="?action=danhmuc&id=<?php echo $rows['maloai'];?>">
				<i class="icon-chevron-right"></i>
				<?php echo $rows['ten'];?>
			</a>
		</li>
	<?php
}
?>
	</ul>
</div>
