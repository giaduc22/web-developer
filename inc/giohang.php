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
	<h3 class="tbltitle">Thông tin đơn hàng</h3>
	<table width='600' border='1' align='center' id="tblcarts">
		<tr>
			<td width='300'>Tên sản phẩm</td>
			<td width='75'>Số lượng</td>
			<td width='99'>Giá</td>
			<td width='138'>Thành tiền</td>
			<td width='138'>Xóa</td>
		</tr>
	 <?php
    
    foreach ($_SESSION["hang"] as $key => $value) {
        $qty = $value;
        $sql = "select * from sanpham where mahang='$key'";
        $result = mysql_query($sql);
        $rows = @mysql_fetch_array($result);
        $total = $qty * $rows['giatien'];
        ?>
			<tr>
			<td><a
				href="index.php?action=chitiet&id=<?php echo $rows['mahang']; ?>&alias:<?php echo $rows['alias']; ?>"><?php echo $rows['tenhang']; ?></a></td>
			<td><input type="text" value=<?php echo $qty;?>
				name="qty[<?php echo $rows['mahang'];?>]" /></td>
			<td>
					<?php echo $rows['giatien'];?>
					<input type="hidden" name="giatien[<?php echo $rows['mahang'];?>]"
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
			<td colspan='3'>Tổng tiền</td>
			<td colspan='2'> <?php echo number_format($tong);?> đ</td>
		</tr>
		<tr>
			<td colspan='5'><input name="muatiep" class="button-red muatiep"
				type="button" onclick="window.location='index.php';"
				value="Mua tiếp sản phẩm" />
				<button name="capnh" style="margin-left: 10px;" id="soluongupdate"
					class="button-red muatiep">Cập nhật số lượng</button></td>

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
	<div class="thongtinmuahang">
		<h3 class="tbltitle">Thông tin mua hàng</h3>
		<table class="tblmuahang">
			<tr>
				<td>Họ tên *:</td>
				<td><input type="text" name="txtname" size="50"
					value="<?php echo $tenkhach;?>" /></td>
			</tr>
			<tr>
				<td>Số điện thoại * :</td>
				<td><input type="text" name="txtphone" value="<?php echo $phone;?>" /></td>
			</tr>
			<tr>
				<td>Địa chỉ * :</td>
				<td><textarea name="diachi" cols="30" rows="5"><?php echo $diachi;?></textarea>

				</td>
			</tr>
			<tr>
				<td>Ghi chú :</td>
				<td><textarea name="ghichu" cols="30" rows="5"
						placeholder="Vui lòng nhập địa chỉ"></textarea></td>
			</tr>
			<?php if(isset($_SESSION["hang"])&&count($_SESSION["hang"])>0){?>
			<tr>
				<td colspan="2"><input name="submit" class="button-red thanhtoan"
					type="submit" value="Thanh toán" /></td>
			</tr> 
			<?php }?>
		</table>
	</div>
	<input type="hidden" name="updatesl" id="updatesl" value="false" />
</form>