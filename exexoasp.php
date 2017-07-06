<?php
if (isset($_GET['id'])) {
    include ('dbconnect.inc');
    $mahang = $_GET['id'];
    $result = mysql_query("delete from sanpham where mahang='$mahang'");
    if ($result) {
        ?>
<script language="javascript">
		window.alert("Xóa thành công");
		window.location="index.php?action=qlsanpham";
		</script>
<?php
    } else {
        ?>
<script language="javascript">
		window.alert("Xóa thất bại");
		window.location="index.php";
		</script>
<?php
    }
}
?>