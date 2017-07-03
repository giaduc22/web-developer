<?php
$_SESSION = array();
session_destroy();
?>
<script language="javascript">
window.alert("Bạn đã thoát thành công");
window.location="index.php";
</script>