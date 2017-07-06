<?php
if (! isset($_SESSION['loginadmin'])) {
    ?>
<script>
	alert('Bạn không có quyền truy cập trang');
	window.location="index.php";
	</script>
<?php
}

require ("dbconnect.inc");
include ("clspage.php");
$paging = new Paging();
$limit = 10;
// Tổng số mẫu tin
$paging->findTotal($link, 'donhang');
// Tổng số trang
$paging->findPages($limit);
// Bắt đầu từ mẫu tin
$start = $paging->rowStart($limit);
// Trang hiện tại
$curpage = ($start / $limit) + 1;

$sql = "select a.*,b.tenhang,b.giatien,b.alias,c.hoten,c.dienthoai from donhang a,sanpham b,khachhang c where a.sanpham=b.mahang and a. username=c.username order by id desc limit " . $start . "," . $limit;
$result = mysql_query($sql);
?>
<div class="table-responsive">
  <h3>Quản lý đơn </h3>
  <table class="table">
  	<thead>
      <tr>
        <th>STT</th>
    		<th>Sản phẩm</th>
    		<th>Khách hàng</th>
    		<th>Số lượng/Giá</th>
    		<th>Thành tiền</th>
    		<th>Ghi chú</th>
    		<th>Địa chỉ</th>
    		<th>Trạng thái</th>
    		<th>Xóa</th>
      </tr>
  	</thead>

    <?php
    $i = 1;
    while ($rows = mysql_fetch_array($result)) {
    ?>

    <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $rows['sanpham'];?> - <a
    href="index.php?action=chitiet&id=<?php echo $rows['sanpham']; ?>&alias:<?php echo $rows['alias']; ?>"><?php echo $rows['tenhang']; ?></a>
    </td>
    <td><?php echo $rows['hoten'] . "-" . $rows['dienthoai'];?></td>
    <td><?php echo $rows['soluong'];?>
    <br /><?php echo $rows['giaban'];?></td>
    <td><?php echo number_format($rows['giaban']*$rows['soluong']);?>đ</td>
    <td><?php echo $rows['ghichu'];?></div></td>
    <td><?php echo $rows['diachi'];?></div></td>
    <td><?php
    if ((int) $rows['trangthai'] == 0) {
    echo "Mới<br/>";
    echo '<a href="xoacartadmin.php?update=' . $rows['id'] . '">Đã nhận</a>';
    } else {
    echo "Đã nhận";
    }
    ?>

</div></td>
<td><div align="left">
<a href="xoacartadmin.php?del=<?php echo $rows['id'];?>">Xóa</a>
</div></td>
</tr>



   <?php
      $i ++;
  }
  ?>
   <td colspan="9">
   <?php
  echo $paging->pagesList($curpage);
  ?>
   </td>
  </table>
</div>
