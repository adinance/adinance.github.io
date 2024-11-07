<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRSET.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$status = $_REQUEST["status"];

$id = getNextId("main_ir_set");

$p = "../../data/irfile/set/pdf/";
if(!empty($_FILES["pdf"]["tmp_name"])){
$handle = new Upload($_FILES["pdf"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "set_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

addIRSET($id,$title,$pdf,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: SET Info.";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>