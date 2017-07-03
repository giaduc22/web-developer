<?php
$link = mysql_connect("localhost", "root", "") or die("khong the ket noi duoc co so du lieu" . mysql_error());
mysql_select_db("ms", $link) or die("khong the ket noi duoc co so du lieu" . mysql_error());
mysql_query("SET NAMES utf8");
?>