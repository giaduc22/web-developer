<?php
session_start();
if (strlen($_POST['txtname']) > 0) {
    $tenhang = true;
} else {
    $tenhang = false;
    $giatien = false;
    $_SESSION['mess'] = "Bạn chưa nhập tên hàng";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
if (strlen($_POST['txtgia']) > 0) {
    $giatien = true;
} else {
    $giatien = false;
    $_SESSION['mess'] = "Bạn chưa nhập giá tiền";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
if (strlen($_POST['txtml']) > 0) {
    $kieu = true;
} else {
    $kieu = false;
    $_SESSION['mess'] = "Bạn chưa chọn phân loại";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
include ("classurl.php");
$url = new URL();

if ($tenhang && $giatien && $kieu) {
    
    $slogan = $_POST['slogan'];
    $t = $_POST['txtname'];
    $alias = $url->slug($t);
    $g = $_POST['txtgia'];
    $gr = $_POST['txtgr'];
    $chitiet = $_POST['chitiet'];
    $h = $_FILES['txthinhanh']['name'];
    $l = $_POST['txtml'];
    $seth = "";
    $newname = '';
    if ($h != "") {
        $duongdan = $_FILES['txthinhanh']['name'];
        $path_parts = pathinfo($_FILES["txthinhanh"]["name"]);
        $ext = pathinfo($duongdan, PATHINFO_EXTENSION);
        $newname = "home-" . time() . "." . $ext;
    }
    require ("dbconnect.inc");
    $sql = "insert into sanpham(tenhang,giatien,slogan,maloai,sogr1sp,chitiet,hinhanh,alias) 
						values('$t','$g','$slogan','$l','$gr','$chitiet','$newname','$alias')";
    $result = mysql_query($sql);
    if ($result == 1) {
        if ($h != "") {
            if (move_uploaded_file($_FILES['txthinhanh']['tmp_name'], "images/sanpham/$newname")) {
                $_SESSION['mess'] = "Thêm sản phẩm thành công";
            } else {
                $_SESSION['mess'] = "Lỗi Upload File";
            }
        } else {
            $_SESSION['mess'] = "Thêm sản phẩm thành công";
        }
        header('Location:' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['mess'] = "Lỗi thêm sản phẩm";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
}

?>