<script>
    jQuery( document ).ready(function() {
         $( "#soluongupdate" ).click(function() {
            jQuery("#updatesl").val("true");
            jQuery("#carts").submit();
            return true;
        });
    });
</script>

  <?php
  require ("dbconnect.inc");
  if (isset($_SESSION["hang"])) {
  $tong = 0;
  ?>


<form action='exedathang.php' method='post' name="carts" id="carts">
	<h3>Thông tin đơn hàng</h3>
  <table class="table">
		<thead>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá</th>
				<th>Thành tiền</th>
				<th>Xóa</th>
			</tr>
		</thead>

    <?php
    foreach ($_SESSION["hang"] as $key => $value) {
    $qty = $value;
    $sql = "select * from sanpham where mahang='$key'";
    $result = mysql_query($sql);
    $rows = @mysql_fetch_array($result);
    $total = $qty * $rows['giatien'];
    ?>

    <tr>
      <td><a href="index.php?action=chitiet&id=<?php echo $rows['mahang']; ?>&alias:<?php echo $rows['alias']; ?>"><?php echo $rows['tenhang']; ?></a></td>
      <td><input class="form-control" type="text" value=<?php echo $qty;?> name="qty[<?php echo $rows['mahang'];?>]" /></td>
      <td><?php echo $rows['giatien'];?> <input type="hidden" name="giatien[<?php echo $rows['mahang'];?>]"
      value="<?php echo $rows['giatien'];?>" />
      </td>
      <td><?php echo $total;?></td>
      <td><a href="xoacart.php?idxoa=<?php echo $rows['mahang']; ?>">Xóa</a></td>
    </tr>

    <?php
    $tong += $total;
    }
    ?>

    <tr>
      <td colspan='3'><label>Tổng tiền</label></td>
      <td colspan='2'><label><?php echo number_format($tong);?>đ</label></td>
    </tr>
    <tr>
      <td colspan='5'>
        <button name="muatiep"
          class="btn btn-primary"
          type="button"
          onclick="window.location='index.php';">Tiếp tục mua sắm</button>
        <button name="capnh"
          style="margin-left: 10px;"
          id="soluongupdate"
          class="btn btn-primary">Cập nhật số lượng</button>
      </td>
    </tr>

    <?php
    } else {
        echo '<h3>Bạn chưa chọn sản phẩm nào</h3>';
    }
    $tenkhach = "";
    $phone = "";
    $diachi = "";
    if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
        $sqlthongtin = "select * from khachhang where username='" . $_SESSION['username'] . "'";

        $resulttt = mysql_query($sqlthongtin);
        $objkhach = @mysql_fetch_array($resulttt);

        $tenkhach = $objkhach['hoten'];
        $phone = $objkhach['dienthoai'];
        $diachi = $objkhach['quequan'];
    }
    ?>

  </table>


  <hr class="hr-primary" />


  <h3>Thông tin mua hàng</h3>

  <div class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Họ và tên *:</label>
      <div class="col-sm-10">
        <input class="form-control" name="txtname" value="<?php echo $tenkhach;?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Số điện thoại *:</label>
      <div class="col-sm-10">
        <input class="form-control" name="txtphone" value="<?php echo $phone;?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Địa chỉ *:</label>
      <div class="col-sm-10">
        <input class="form-control" name="diachi" value="<?php echo $diachi;?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Ghi chú:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="ghichu"></textarea>
      </div>
    </div>
  </div>

	<div class="row">
		<div class="col-md-12">
			<?php
      if(isset($_SESSION["hang"])&&count($_SESSION["hang"])>0){
      ?>
        <button type="submit" name="submit" class="btn btn-primary">Thanh toán</button>
			<?php }?>
		</div>
	</div>
	<input type="hidden" name="updatesl" id="updatesl" value="false" />

</form>
