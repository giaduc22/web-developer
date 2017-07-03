<?php
if (isset($_GET['id'])) {
    include ('dbconnect.inc');
    $mahang = $_GET['id'];
    
    $result2 = mysql_query("select * from LoaiSanPham where maloai='$mahang'");
    $rows = @mysql_fetch_array($result2);
    if ($rows['maloai'] == "") {
        $_SESSION['mess'] = "Không tìm thấy danh mục";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
    $result = mysql_query("delete from LoaiSanPham where maloai='$mahang'");
    if ($result) {
        $_SESSION['mess'] = "Xóa thành công";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['mess'] = "Xóa thất bại";
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
}
?>