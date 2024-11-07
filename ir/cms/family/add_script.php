<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionFamily.inc.php";
include('../_class/class.upload.php');

$type_id = addslashes($_REQUEST["type_id"]);
$name = addslashes($_REQUEST["name"]);
$detail= addslashes($_REQUEST["detailval"]);
$url = addslashes($_REQUEST["url"]);
$status = $_REQUEST["status"];

$id = getNextId("main_family");
$p1 = "../../data/family/logo/";
$p2 = "../../data/family/photo/";
if(!empty($_FILES["photo"]["tmp_name"])){
//  Upload photo
$handle = new Upload($_FILES["photo"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "family_pic_".$id;
	$handle->image_resize          = true;
	$handle->image_x               = 605;
	$handle->image_y               = 440;
    //$handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#000000';
	$handle->Process($p2);
		if ($handle->processed) {
			$photo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

if(!empty($_FILES["logo"]["tmp_name"])){
//  Upload photo
$handle = new Upload($_FILES["logo"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "family_logo_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 150){
	$handle->image_x               = 150;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
    $handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#ffffff';
	$handle->Process($p1);
		if ($handle->processed) {
			$logo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

addFamily($id,$type_id,$name,$detail,$logo,$photo,$url,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "Our Family";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>