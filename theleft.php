<?php
require ("dbconnect.inc");
?>
<div class="leftwapper">
	<h2>
		<a href="#">Danh Mục Sản Phẩm</a>
	</h2>
	<ul class="menu_cate">
<?php
$result = mysql_query("select * from LoaiSanPham");
while ($rows = mysql_fetch_array($result)) {
    ?>
	<li><a href="?action=danhmuc&id=<?php echo $rows['maloai'];?>"><?php echo $rows['ten'];?></a>
		</li>
<?php
}
?>
</ul>
	<div class="ads"></div>
</div>

