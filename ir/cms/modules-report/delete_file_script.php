<?php
require_once "../inc/config_txt.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
include('../_class/class.upload.php');


$file = trim($_REQUEST["file"]);
$path = trim($_REQUEST["path"]);
$type = $_REQUEST["type"];
$id = $_REQUEST["id"];
$p = "../../../ir/uploads/resolutions/";

if(file_exists($path.$file)){
 @unlink($path.$file);
}

$arr = getIRDocumentRecord(" WHERE id='$id' " );
$file_th = $arr['file_th'];
$file_en = $arr['file_en'];
$title_th = $arr['title_th'];
$title_en = $arr['title_en'];
$type_id = $arr['type'];
$year = $arr['year'];
$status = $arr['status'];

if($file==$file_th) $file_th = "";
if($file==$file_en) $file_en = "";

$update_by = $_SESSION["s_admin_username"];
$url_th = $arr['url_th'];
$url_en = $arr['url_en'];
editIRDocumentRecord($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by);

$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : The Resolutions";
$detail = "Delete file ".$file." by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
echo "success";	
//header("Location:index.php");
?>