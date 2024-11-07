<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRReport.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$status = $_REQUEST["status"];
$photo = $_REQUEST["old_photo"];
$pdf = $_REQUEST["old_pdf"];

$id = $_REQUEST["id"];
$p1 = "../../data/irfile/report/photo/";
$p2 = "../../data/irfile/report/pdf/";
if(!empty($_FILES["photo"]["tmp_name"])){
if(file_exists($p1.$photo)){
		@unlink($p1.$photo);
	}
//  Upload photo
$handle = new Upload($_FILES["photo"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "report_".$id;
	$handle->image_resize          = true;
	$handle->image_x               = 152;
	$handle->image_y               = 132;
    //$handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#000000';
	$handle->Process($p1);
		if ($handle->processed) {
			$photo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

if(!empty($_FILES["pdf"]["tmp_name"])){
if(file_exists($p2.$pdf)){
		@unlink($p2.$pdf);
	}
//  Upload photo
$handle = new Upload($_FILES["pdf"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "report_".$id;
	$handle->Process($p2);
		if ($handle->processed) {
			$pdf = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}




editReport($id,$title,$pdf,$photo,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Annual Report";
$detail = "Edit by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
	
header("Location:index.php");
?>