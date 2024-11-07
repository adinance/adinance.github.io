<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionShareHolder.inc.php";

//Retrieve form data.

$detail = addslashes($_REQUEST["detail"]);

updateShareholder($detail);	

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "Shareholder";
$detail = " edit by  ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>