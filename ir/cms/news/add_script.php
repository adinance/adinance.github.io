<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionNewsActivities.inc.php";
include('../_class/class.upload.php');

$title = addslashes($_REQUEST["title"]);
$description= addslashes($_REQUEST["description"]);
$detail = addslashes($_REQUEST["detail"]);
$news_date = $_REQUEST["news_date"];
$status = $_REQUEST["status"];

$id = getNextId("main_news");
$p = "../../data/news/thumb/";

$thumbnail_1 = "";
$thumbnail_2 = "";

if(!empty($_FILES["photo"]["tmp_name"])){
//  Upload photo
$handle = new Upload($_FILES["photo"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "news_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 190){
	$handle->image_x               = 190;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
	$handle->image_y               = 130;
    //$handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#ffffff';
	$handle->Process($p);
		if ($handle->processed) {
			$photo = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

if(!empty($_FILES["thumbnail_1"]["tmp_name"])){
    
//  Upload photo
$handle = new Upload($_FILES["thumbnail_1"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "thumbnail_1_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 200){
	$handle->image_x               = 200;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
	$handle->image_y               = 210;
    //$handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#ffffff';
	$handle->Process($p);
		if ($handle->processed) {
			$thumbnail_1 = $handle->file_dst_name;
                        move_uploaded_file($_FILES["thumbnail_1"]["tmp_name"],$p."preview_1_".$id.".jpg") ;
		  	$handle-> Clean();
		} 
	}
        
        
}

if(!empty($_FILES["thumbnail_2"]["tmp_name"])){
    
//  Upload photo
$handle = new Upload($_FILES["thumbnail_2"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "thumbnail_2_".$id;
	$handle->image_resize          = true;
	if($handle->image_src_x > 200){
	$handle->image_x               = 200;
	}else{
	$handle->image_x  = $handle->image_src_x;	
	}
	$handle->image_y               = 210;
    //$handle->image_ratio_y      = true;	
	$handle->image_ratio_fill      = true;
	$handle->image_background_color = '#ffffff';
	$handle->Process($p);
		if ($handle->processed) {
			$thumbnail_2 = $handle->file_dst_name;
                        move_uploaded_file($_FILES["thumbnail_2"]["tmp_name"],$p."preview_2_".$id.".jpg") ;
		  	$handle-> Clean();
		} 
	} 
        
        
}

addNews($id,$title,$description,$detail,$photo,$news_date,$status,$thumbnail_1,$thumbnail_2);

//echo $thumbnail_1."<br/>";
//echo $thumbnail_2;

//$logtest = addNews($id,$title,$description,$detail,$photo,$news_date,$status,$thumbnail_1,$thumbnail_2);
//echo $logtest;

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "News";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
	
header("Location:index.php");
?>