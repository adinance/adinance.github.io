<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionNewsActivities.inc.php";
include('../_class/class.upload.php');

$title = addslashes($_REQUEST["title"]);
$month1 = $_REQUEST["month1"];
$year1 = $_REQUEST["year1"];
$month2 = $_REQUEST["month2"];
$year2 = $_REQUEST["year2"];
$pdf = $_REQUEST["url"];
$status = $_REQUEST["status"];

$id = getNextId("main_newsletter");
$p1 = "../../data/newsletter/photo/";
$p2 = "../../data/newsletter/thumb/";
$p3 = "../../data/newsletter/pdf/";
if(!empty($_FILES["file1"]["tmp_name"])){
//  Upload photo
$handle = new Upload($_FILES["file1"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "newsletter_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 236){
	$handle->image_x               = 236;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
	$handle->image_y               = 243;
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#000000';
	$handle->Process($p1);
		if ($handle->processed) {
			$photo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

if(!empty($_FILES["file2"]["tmp_name"])){
//  Upload photo thumb
$handle = new Upload($_FILES["file2"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "newsletter_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 75){
	$handle->image_x               = 75;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
	$handle->image_y               = 100;
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#000000';
	$handle->Process($p2);
		if ($handle->processed) {
			$thumb = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

//if(!empty($_FILES["file3"]["tmp_name"])){
////  Upload pdf
//$handle = new Upload($_FILES["file3"]);
//	if ($handle->uploaded) {
//	$handle->file_new_name_body   = "newsletter_".$id;
//	$handle->Process($p3);
//		if ($handle->processed) {
//			$pdf = $handle->file_dst_name;
//		  	$handle-> Clean();
//		} 
//	} 
//}



addNewsletter($id,$title,$month1,$year1,$month2,$year2,$photo,$thumb,$pdf,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "Newsletter";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
	
header("Location:index.php");
?>