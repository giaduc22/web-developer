<?php
session_start();
$muahang = (int) $_GET['id'];
include ("dbconnect.inc");
$sql = "select mahang,tenhang from sanpham where mahang='$muahang'";
$result = mysql_query($sql);
$rows = @mysql_fetch_array($result);
if ($rows['mahang'] > 0) {
    if ($_SESSION["hang"]["$muahang"]) {
        $qty = $_SESSION["hang"]["$muahang"] + 1;
    } else {
        $qty = 1;
    }
    $_SESSION["hang"]["$muahang"] = $qty;
    $_SESSION['mess'] = "Thêm sản phẩm [" . $rows['tenhang'] . "] vào giỏ hàng thành công";
} else {
    $_SESSION['mess'] = "Lỗi thêm sản phẩm vào giỏ hàng";
}
header('Location:index.php?action=giohang');
?>
	
