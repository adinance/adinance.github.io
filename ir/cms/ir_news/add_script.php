<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRNews.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$status = $_REQUEST["status"];

$id = getNextId("main_ir_news");

$p = "../../data/irfile/news/pdf/";
if(!empty($_FILES["pdf"]["tmp_name"])){
$handle = new Upload($_FILES["pdf"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "news_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

addIRNews($id,$title,$pdf,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: News";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>