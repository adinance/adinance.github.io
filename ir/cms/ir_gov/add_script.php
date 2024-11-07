<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRCorpGov.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$detail = addslashes($_REQUEST["detail"]);
$status = $_REQUEST["status"];

$id = getNextId("main_ir_gov");

addIRGov($id,$title,$detail,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Corperate Governmance";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>