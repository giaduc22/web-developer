

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
        $result = mysql_query("select username from KhachHang where username='$u'");
        if (mysql_num_rows($result) == 0) {
            $n = $_POST['txtname'];
            $nam = $_POST['selectnam'];
            $thang = $_POST['selectthang'];
            $ngay = $_POST['selectngay'];
            $q = $_POST['selectque'];
            $dt = $_POST['txtphone'];
            $sql1 = "insert into KhachHang(hoten,ngaysinh,quequan,dienthoai,username,password)
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



<fieldset>
    <div id="legend">
      <legend class="">Đăng ký</legend>
    </div>

		<div class="control-group">
      <!-- Fullname -->
      <label class="control-label"  for="fulname">Họ và tên</label>
      <div class="controls">
        <input type="text" id="fulname" name="fulname" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>

    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>


    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Đăng ký</button>
      </div>
    </div>
  </fieldset>




<h3 class="tbltitle">Đăng kí</h3>
	<form id="form1" name="form1" method="post" action="">
		<div align="center">
			<table width="352" border="1">
				<tr>
					<td width="112">Họ tên</td>
					<td width="224"><label>
							<div align="left">
								<input type="text" name="txtname" /> <span class="style1">*</span>
							</div>
					</label></td>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td><label>
							<div align="left">
								<select name="selectnam">
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
            </select> <select name="selectthang">
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
            </select> <select name="selectngay">
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
            </select> <span class="style1">*</span>
							</div>
					</label></td>
				</tr>
				<tr>
					<td>Quê quán</td>
					<td><label>
							<div align="left">
								<textarea name="selectque" cols="30" rows="5"></textarea>
								<span class="style1">*</span>
							</div>
					</label></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td><div align="left">
							<input type="text" name="txtphone" /> <span class="style1">*</span>
						</div></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><div align="left">
							<input type="text" name="txtuser" /> <span class="style1">*</span>
						</div></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><div align="left">
							<input type="password" name="txtpass" /> <span class="style1">*</span>
						</div></td>
				</tr>
				<tr>
					<td colspan="2"><label> <input type="submit"
							class="button-red muatiep" name="Submit" value="Đăng ký" />
					</label></td>
				</tr>
			</table>
		</div>
	</form>
