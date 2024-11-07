<?php
require_once "../inc/config_txt.php";
//require_once "../inc/clsConnection.php";
require_once "../../../inc/mysql-command.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
//require_once "../inc/functionFinancialHilight.inc.php";
//require_once "../inc/function-ir-document.php";
require_once "../../../inc/function-ir-document.php";

//Retrieve form data.

$detail = addslashes($_REQUEST["detail"]);

updateFinancialHilightEN($detail);	

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "Financial Hilight";
$detail = " by  ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>