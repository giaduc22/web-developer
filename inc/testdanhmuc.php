<table width="" border="1" background="">
	<h3 class="tbltitle">Test thêm danh mục</h3>
	<input name="Smsua" type="button"
		onclick="window.location='?action=themdanhmuc';"
		class="button-red muatiep" value="Thêm mới danh mục" />
	<tr>
		<td width="20"><div align="left">STT</div></td>
		<td width=""><div align="left">Danh Mục</div></td>
		<td width="20"><div align="left">Sửa</div></td>
		<td width="20"><div align="left">Xóa</div></td>
	</tr>
<?php
$i = 1;
$result = mysql_query("select * from LoaiSanPham order by maloai");
while ($rows = mysql_fetch_array($result)) {
    ?>
  <tr>
		<td><div align="left"><?php echo $i;?></div></td>
		<td><div align="left"><?php echo $rows['maloai'];?> - <a
					href="?action=danhmuc&id=<?php echo $rows['maloai']; ?>"><?php echo $rows['ten']; ?></a>
			</div></td>
		<td><div align="left">
				<a href="?action=suadanhmuc&id=<?php echo $rows['maloai'];?>">Sửa</a>
			</div></td>
		<td><div align="left">
				<a href="exexoadm.php?id=<?php echo $rows['maloai'];?>">Xóa</a>
			</div></td>
	</tr>
 <?php
    $i ++;
}
?>
 <td colspan="3"></td>
</table>