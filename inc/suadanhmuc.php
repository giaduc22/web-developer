<?php
// mysql_query("SET NAMES utf8");
$maloai = isset($_GET['id']) ? $_GET['id'] : "";
$result = mysql_query("select * from loaisanpham where maloai='$maloai'");
$rows = @mysql_fetch_array($result);
if ($rows['maloai'] == "") {
    $_SESSION['mess'] = "Không tìm thấy danh mục";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
?>


<form id="form1" name="form1" method="post" action="exedanhmuc.php" enctype="multipart/form-data">
  <div class="table-responsive">
  <h3 class="tbltitle">Cập nhật Danh Mục</h3>
  <table class="table">
    <tr>
      <td>Mã Danh Mục</td>
      <td><?php echo $rows['maloai'];?><input class="form-control" name="maloai" type="hidden" value="<?php echo $rows['maloai']; ?>" /></td>
    </tr>
    <tr>
      <td>Tên Danh Mục</td>
      <td><input class="form-control" name="txtname" type="text" value="<?php echo $rows['ten'];?>" /></td>
    </tr>
  </table>
  <button class="btn btn-primary pull-right">Cập nhật thông tin</button>
  </div>
</form>
