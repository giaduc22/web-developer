<?php
if (! isset($_SESSION['loginadmin'])) {
    ?>
<script>
	alert('Bạn không có quyền truy cập trang');
	window.location="index.php";
	</script>
<?php
}

include ("clspage.php");
$paging = new Paging();
$limit = 10;
// Tổng số mẫu tin
$paging->findTotal($link, 'loaisp');
// Tổng số trang
$paging->findPages($limit);
// Bắt đầu từ mẫu tin
$start = $paging->rowStart($limit);
// Trang hiện tại
$curpage = ($start / $limit) + 1;

?>




<div class="table-responsive">
  <h3>Quản lý danh Mục</h3>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Mã loại</th>
        <th>Danh mục</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>

    <?php
    $i = 1;
    $result = mysql_query("select * from LoaiSanPham order by maloai desc limit " . $start . "," . $limit);
    while ($rows = mysql_fetch_array($result)) {
    ?>
      <tr>
    		<td><?php echo $i;?></td>
        <td><?php echo $rows['maloai'];?></td>
    		<td><a href="?action=danhmuc&id=<?php echo $rows['maloai']; ?>"><?php echo $rows['ten']; ?></a></td>
    		<td><a href="?action=suadanhmuc&id=<?php echo $rows['maloai'];?>">Sửa</a></td>
    		<td><a href="exexoadm.php?id=<?php echo $rows['maloai'];?>">Xóa</a></td>
    	</tr>
     <?php
        $i ++;
    }
    ?>
  </table>

  <button class="btn btn-default pull-right" name="Smsua" onclick="window.location='?action=themdanhmuc';">Thêm danh mục</button>
</div>
<div class="row">
  <div class="col-md-9 col-md-offset-3">
    <ul class="pagination pagination-sm">
        <?php
        echo $paging->pagesList($curpage);
        ?>
    </ul>
  </div>
</div>
