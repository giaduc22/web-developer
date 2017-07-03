<?php
include ("dbconnect.inc");
$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($action)
    include "inc/" . $action . ".php";
else
    include "inc/danhmuc.php";
