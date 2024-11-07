<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$file_th = $_REQUEST["file_th"];
$file_en = $_REQUEST["file_en"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];

$id = getNextId("ir_document");
$create_date = $_REQUEST["create_date"];
$description_th = $_REQUEST["description_th"];
$description_en = $_REQUEST["description_en"];

$p = "../../../ir/uploads/press-release/";
if(!empty($_FILES["file_th"]["tmp_name"])){
    $handle = new Upload($_FILES["file_th"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body   = $year."_".$type_id."_0_th";
    $handle->Process($p);
        if ($handle->processed) {
            $file_th = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}

if(!empty($_FILES["file_en"]["tmp_name"])){
    $handle = new Upload($_FILES["file_en"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body   = $year."_".$type_id."_0_en";
    $handle->Process($p);
        if ($handle->processed) {
            $file_en = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}

$configuration_id = '6';
// $create_date = "NOW()";
$create_by = $_SESSION["s_admin_username"];
$update_by = $_SESSION["s_admin_username"];
//addIRDocumentRecord($id,$type_id,$year,$configuration_id,$file_th,$file_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by);
//
$url_th = "";
$url_en = "";
addIRDocumentRecordPressRelease($id,$type_id,$year,$configuration_id,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by,$description_th,
$description_en);
//echo $test;
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Press Release";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>