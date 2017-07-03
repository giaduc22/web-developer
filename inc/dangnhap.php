<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Đăng nhập</h3>

		<?php
		if (isset($_POST['Submit'])) {
		    if (strlen($_POST['txtuser']) > 0) {
		        $u = $_POST['txtuser'];
		    } else {
		        ?>
					<script language="javascript">
					window.alert("Bạn chưa nhập Username");
					</script>
				<?php
		    }
		    if (strlen($_POST['txtpass']) > 0) {
		        $p = $_POST['txtpass'];
		    } else {
		        ?>
					<script language="javascript">
					window.alert("Bạn chưa nhập password");
					</script>
				<?php
		    }
		    if ($u && $p) {
		        $result = mysql_query("select username,quyen from KhachHang where (username='$u' && password=MD5('$p'))");
		        if (mysql_num_rows($result) == 0) {
		            ?>
					<script language="javascript">
					window.alert("Sai tên đăng nhập hoặc mật khẩu");
					</script>
				<?php
		        } else {
		            ?>
					<script language="javascript">
					window.alert("Đăng nhập thành công");
					window.location="index.php"
					</script>
				<?php
		            $rows = @mysql_fetch_array($result);
		            if ($rows['quyen'] == 1) {
		                $_SESSION['loginadmin'] = true;
		            }
		            $_SESSION['username'] = $u;
		            $_SESSION['password'] = $p;
		            exit();
		        }
		    }
		}
		?>

		<form class="form-horizontal" id="form1" name="form1" method="post" action="">
		  <div class="form-group">
		    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="txtuser">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="txtpass">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default" name="Submit">Đăng nhập</button>
		    </div>
		  </div>
		</form>
	</body>
</html>






<!-- <form id="form1" name="form1" method="post" action="">
		<div align="center">
			<table width="302" border="1">
				<tr>
					<td width="124">Tên tài khoản</td>
					<td width="162"><label> <input type="text" name="txtuser" />
					</label></td>
				</tr>
				<tr>
					<td>Mật Khẩu</td>
					<td><input type="password" name="txtpass" /></td>
				</tr>
				<tr>
					<td colspan="2"><label> <input type="submit"
							class="button-red muatiep" name="Submit" value="Đăng nhập" />
					</label></td>
				</tr>
			</table>
		</div>
	</form> -->
