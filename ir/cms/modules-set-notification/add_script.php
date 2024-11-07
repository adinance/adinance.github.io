<?php
//echo 'a';
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$create_date = $_REQUEST["create_date"];
$file_th = $_GET["file_th"];
$file_en = $_GET["file_en"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];

//echo 'a';
//echo $_FILES["file_en"]["tmp_name"];
//echo $_FILES["file_en"]["size"];
//echo 'b';
//$id = getNextId("ir_document");

$id = '999';




$p = "../../../ir/uploads/set-notification/";
//if(!empty($_FILES["file_th"]["tmp_name"])){
    $handle = new Upload($_FILES["file_th"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body   = $year."_".$type_id."_0_th";
    $handle->Process($p);
        if ($handle->processed) {
            $file_th = $handle->file_dst_name;
            $handle-> Clean();
        } 
         //echo 'aa';
    } 
   //echo 'bb';
//}



//if(!empty($_FILES["file_en"]["tmp_name"])){
    $handle = new Upload($_FILES["file_en"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body   = $year."_".$type_id."_0_en";
    $handle->Process($p);
        if ($handle->processed) {
            $file_en = $handle->file_dst_name;
            $handle-> Clean();
        } 
            //
    } 

//}


$configuration_id = '5';
// $create_date = "NOW()";
$create_by = $_SESSION["s_admin_username"];
$update_by = $_SESSION["s_admin_username"];

//$url_th = "";
$url_en = "";

addIRDocumentRecord($id,$type_id,$year,$configuration_id,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by); //addIRDocumentRecord($id,$type_id,$year,$configuration_id,$file_th,$file_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by);


$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Set Notification";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>