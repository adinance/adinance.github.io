<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRPresentation.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$presentation = addslashes($_REQUEST["presentation"]);
$webcast = addslashes($_REQUEST["webcast"]);
$status = $_REQUEST["status"];

$id = getNextId("main_presentation");


addIRPresentation($id,$title,$presentation,$webcast,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Presentation";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>