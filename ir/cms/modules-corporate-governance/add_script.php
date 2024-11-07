<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$file_th = $_REQUEST["file_th"];
$file_en = $_REQUEST["file_en"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];

$id = getNextId_corporate("ir_document_corporate");


$p = "../../../ir/uploads/document_corporate/";
if(!empty($_FILES["file_th"]["tmp_name"])){
    $handle = new Upload($_FILES["file_th"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body   = $year."_as_".$id."_th";
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
    $handle->file_new_name_body   = $year."_as_".$id."_en";
    $handle->Process($p);
        if ($handle->processed) {
            $file_en = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}


//$create_date = "NOW()";
$create_by = $_SESSION["s_admin_username"];
$update_by = $_SESSION["s_admin_username"];

/*echo ($id);
echo ($year);
echo ($file_th);
echo ($file_en);
echo ($title_th);
echo ($title_en);
echo ($status);
echo ($update_by);*/


addIRDocumentCorporate($id,$year,$file_th,$file_en,$title_th,$title_en,$status,$update_by);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Corporate Report";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>