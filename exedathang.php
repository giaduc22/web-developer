<?php
session_start();

if (! isset($_SESSION["hang"])) {
    $_SESSION['mess'] = "Bạn chọn sản phẩm.";
    return header('Location:index.php?action=giohang');
}

function getPrice($id)
{
    require ("dbconnect.inc");
    $sql = "select giatien from sanpham where mahang='$id'";
    $result = mysql_query($sql, $link);
    $obj = @mysql_fetch_array($result);
    return (float) $obj['giatien'];
}
$updatesl = $_POST['updatesl'];
if ($updatesl == "true") {
    // tien hanh cap nhat so luong
    foreach ($_POST['qty'] as $id => $val) {
        $_SESSION["hang"]["$id"] = $val;
    }
    return header('Location:index.php?action=giohang');
}
if (! isset($_SESSION['username'])) {
    // not logion
    $_SESSION['mess'] = "Bạn chưa đăng nhập, vui lòng đăng nhập để mua hàng.";
    return header('Location:index.php?action=giohang');
}

$tenkhach = $_POST['txtname'];
$phone = $_POST['txtphone'];
$diachi = $_POST['diachi'];
$ghichu = $_POST['ghichu'];
if ($tenkhach == "") {
    $_SESSION['mess'] = "Vui lòng nhập tên của bạn";
    return header('Location:index.php?action=giohang');
} else if ($phone == "") {
    $_SESSION['mess'] = "Chưa nhập số điện thoại";
    return header('Location:index.php?action=giohang');
} else if ((! preg_match('/^[0|84]\d{9,10}$/', $phone))) {
    $_SESSION['mess'] = "Số điện thoại không đúng";
    return header('Location:index.php?action=giohang');
} else if ($diachi == "") {
    $_SESSION['mess'] = "Chưa nhập địa chỉ";
    return header('Location:index.php?action=giohang');
}
if (isset($_SESSION["hang"])) {
    require ("dbconnect.inc");
    $mahang = 0;
    $soluong = 0;
    
    $str_now = array();
    foreach ($_POST['qty'] as $id => $val) {
        $mahang = $id;
        $soluong = $val;
        $price = getPrice($id);
        $str_now[] = "(NULL, '$id', '" . $_SESSION['username'] . "', '$ghichu', '$val', '$price','0','$diachi')";
    }
    $sql1 = "INSERT INTO `donhang` (`id`, `sanpham`, `username`, `ghichu`, `soluong`, `giaban`,`trangthai`,`diachi`) VALUES " . implode(",", $str_now);
    $result1 = mysql_query($sql1, $link);
    if (mysql_affected_rows() == 1) {}
    $_SESSION['mess'] = "Đặt hàng thành công";
    $_SESSION["hang"] = null;
    unset($_SESSION["hang"]);
    
    return header('Location:index.php?action=giohang');
} else {
    $_SESSION['mess'] = "Không có sản phẩm nào trong giỏ hàng";
}
return header('Location:index.php?action=giohang');
?>