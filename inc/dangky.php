

<?php
if (isset($_POST['Submit'])) {
    if (strlen($_POST['txtname']) > 0) {
        $hoten = true;
    } else {
        $hoten = false;
        ?>
<script language="javascript">
			window.alert("Ban chua nhap ho ten");
			</script>
<?php
    }

    if (strlen($_POST['txtuser']) > 0) {
        $username = true;
    } else {
        $username = false;
        ?>
<script language="javascript">
			window.alert("Ban chua nhap user");
			</script>
<?php
    }
    if (strlen($_POST['txtphone']) > 0) {
        $dienthoai = true;
    } else {
        $dienthoai = false;
        ?>
<script language="javascript">
			window.alert("Ban chua nhap so dien thoai");
			</script>
<?php
    }
    if (strlen($_POST['txtpass']) > 0) {
        $password = true;
    } else {
        $password = false;
        ?>
<script language="javascript">
			window.alert("Ban chua nhap password");
			</script>
<?php
    }
    if ($hoten && $username && $password && $dienthoai) {
        $u = $_POST['txtuser'];
        $p = $_POST['txtpass'];
        $result = mysql_query("select username from khachhang where username='$u'");
        if (mysql_num_rows($result) == 0) {
            $n = $_POST['txtname'];
            $nam = $_POST['selectnam'];
            $thang = $_POST['selectthang'];
            $ngay = $_POST['selectngay'];
            $q = $_POST['selectque'];
            $dt = $_POST['txtphone'];
            $sql1 = "insert into khachhang(hoten,ngaysinh,quequan,dienthoai,username,password)
						values('$n',concat('$nam','-','$thang','-','$ngay'),'$q','$dt','$u',MD5('$p'))";
            $result1 = mysql_query($sql1);
            if (mysql_affected_rows() == 1) {
                ?>
<script language="javascript">
			window.alert("Đăng ký thành công");
			window.location=("index.php?action=dangnhap");
			</script>
<?php
                exit();
            } else {
                ?>
<script language="javascript">
			window.alert("Lỗi đăng ký");
			</script>
<?php
            }
        } else {
            ?>
<script language="javascript">
			window.alert("Username đã có người đăng ký");
			</script>
<?php
        }
    }
}
?>




<h3>Đăng kí</h3>
<form id="form1" name="form1" method="post" action="">
  <div class="table-responsive">
		<table class="table">
			<tr>
				<td>Họ tên</td>
				<td><input class="form-control" type="text" name="txtname" /></td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td class="row">
            <div class="col-sm-4">
              <select name="selectnam" class="form-control">
              <option>Năm</option>
              <?php
              $i = 1980;
              while ($i < 2009) {
              ?>
              <option><?php echo "$i";?></option>
              <?php
              $i ++;
              }
              ?>
              </select>
            </div>

            <div class="col-sm-4">
              <select name="selectthang" class="form-control">
              <option>Tháng</option>
              <?php
              $i = 1;
              while ($i < 13) {
              ?>
              <option><?php echo "$i";?></option>
              <?php
              $i ++;
              }
              ?>
              </select>
            </div>

            <div class="col-sm-4">
              <select name="selectngay" class="form-control">
              <option>Ngày</option>
              <?php
              $i = 1;
              while ($i < 32) {
              ?>
              <option><?php echo "$i";?></option>
              <?php
              $i ++;
              }
              ?>
              </select>
            </div>

      </td>
			</tr>
			<tr>
				<td>Quê quán</td>
				<td><textarea class="form-control" name="selectque"></textarea></td>
			</tr>
			<tr>
				<td>Điện thoại</td>
				<td><input class="form-control" type="text" name="txtphone" /> </td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input class="form-control" type="text" name="txtuser" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input class="form-control" type="password" name="txtpass" /></td>
			</tr>
			<tr>
				<td colspan="2">
            <button class="btn btn-primary pull-right" type="submit" name="Submit">Đăng ký</button>
        </td>
			</tr>
		</table>

</div>
</form>
