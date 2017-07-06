<?php
session_start();
require ("dbconnect.inc");
if ($_GET['update'] != "" && $_GET['update'] > 0) {
    $id = (int) $_GET['update'];
    $sql1 = "UPDATE `donhang` SET trangthai=1 WHERE id='$id'";
    $result1 = mysql_query($sql1, $link);
    if (mysql_affected_rows() == 1) {}
    
    $_SESSION['mess'] = "Cập nhật thành công";
}
if ($_GET['del'] != "" && $_GET['del'] > 0) {
    $id = (int) $_GET['del'];
    $sql2 = "DELETE FROM `donhang` WHERE id='$id'";
    $result1 = mysql_query($sql2, $link);
    if (mysql_affected_rows() == 1) {}
    $_SESSION['mess'] = "Xóa thành công";
}
header('Location:' . $_SERVER['HTTP_REFERER']);
?>