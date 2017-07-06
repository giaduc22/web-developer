<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("dbconnect.inc");
include ("classurl.php");
$url = new URL();

$m = $_POST['mahang'];
$n = $_POST['txtname'];

$alias = $url->slug($n);
$g = $_POST['txtgia'];
$slogan = $_POST['slogan'];
$ml = $_POST['txtml'];
$gr = $_POST['txtgr'];
$chitiet = $_POST['chitiet'];
$h = $_FILES['txthinhanh']['name'];
$seth = "";
if ($h != "") {
    $duongdan = $_FILES['txthinhanh']['name'];
    $path_parts = pathinfo($_FILES["txthinhanh"]["name"]);
    $ext = pathinfo($duongdan, PATHINFO_EXTENSION);
    $newname = "home-" . time() . "." . $ext;
    $seth = ",hinhanh='$newname'";
}
$sql = "UPDATE sanpham SET tenhang='$n',alias='$alias',giatien='$g',slogan='$slogan',maloai='$ml',sogr1sp='$gr',chitiet='$chitiet' $seth WHERE mahang='$m'";
$result = mysql_query($sql);
if ($result) {
    if ($h != "") {
        if (move_uploaded_file($_FILES['txthinhanh']['tmp_name'], "images/sanpham/$newname")) {
            $_SESSION['mess'] = "Cập nhật thành công";
        } else {
            $_SESSION['mess'] = "Lỗi Upload File";
        }
    } else {
        $_SESSION['mess'] = "Cập nhật thành công";
    }
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    $_SESSION['mess'] = "Lỗi Câợ nhật sản phẩm";
    header('Location:' . $_SERVER['HTTP_REFERER']);
}
?>
