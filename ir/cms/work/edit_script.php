<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionOurWork.inc.php";
include('../_class/class.upload.php');


$title = addslashes($_REQUEST["title"]);
$code = addslashes($_REQUEST["code"]);
$status = $_REQUEST["status"];
$photo = $_REQUEST["old_photo"];

$id = $_REQUEST["id"];
$p = "../../data/work/";
if(!empty($_FILES["photo"]["tmp_name"])){
if(file_exists($p.$photo)){
		@unlink($p.$photo);
	}
//  Upload photo
$handle = new Upload($_FILES["photo"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "work_".$id;
	$handle->image_resize          = true;
	$handle->image_x               = 120;
	$handle->image_y               = 74;
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#000000';
	$handle->Process($p);
		if ($handle->processed) {
			$photo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}



editWork($id,$title,$code,$photo,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "Our Work";
$detail = "Edit by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
	
header("Location:index.php");
?>