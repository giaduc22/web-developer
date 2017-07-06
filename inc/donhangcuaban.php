<?php
if (! isset($_SESSION['username'])) {
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

$sql = "select a.*,b.tenhang,b.giatien,b.alias,c.hoten,c.dienthoai from donhang a,sanpham b,khachhang c where a.sanpham=b.mahang and a. username=c.username and c.username='" . $_SESSION['username'] . "' order by id desc limit " . $start . "," . $limit;
$result = mysql_query($sql);
?>

<div class="table-responsive">
  <h3 class="tbltitle">Quản lý đơn hàng</h3>
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Ghi chú</th>
        <th>Địa chỉ</th>
        <th>Xóa</th>
      </tr>
    </thead>

    <?php
    $i = 1;
    while ($rows = mysql_fetch_array($result)) {
    ?>

    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $rows['sanpham'];?></td>
      <td><a href="index.php?action=chitiet&id=<?php echo $rows['sanpham']; ?>&alias:<?php echo $rows['alias']; ?>"><?php echo $rows['tenhang']; ?></a></td>
      <td><?php echo $rows['soluong'];?></td>
      <td><?php echo $rows['giaban'];?></td>
      <td><?php echo number_format($rows['giaban']*$rows['soluong']);?>đ</td>
      <td><?php echo $rows['ghichu'];?></td>
      <td><?php echo $rows['diachi'];?></td>
      <td><a href="xoacartadmin.php?del=<?php echo $rows['id'];?>">Xóa</a></td>
    </tr>

    <?php
    $i ++;
    }
    ?>
  </table>
</div>
