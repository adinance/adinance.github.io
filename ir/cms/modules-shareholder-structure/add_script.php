<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$status = $_REQUEST["status"];
$name_th = $_REQUEST["name_th"];
$name_en = $_REQUEST["name_en"];
$amount = $_REQUEST["amount"];
$percent = $_REQUEST["percent"];
$id = getNextId("ir_shareholder");
$order_id = $id;
addIRShareholderRecord($id,$name_th,$name_en,$amount,$percent,$status,$order_id);
//addIRDocumentRecord($id,$type_id,$year,$configuration_id,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Annual Report";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>