<?php
require_once "../inc/config_txt.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionIRCorpGov.inc.php";
include('../_class/class.upload.php');


$detail = addslashes($_REQUEST["detailval"]);
$pdf = $_REQUEST["old_pdf"];

$p = "../../data/irfile/gov/pdf/";
if(!empty($_FILES["pdf"]["tmp_name"])){
if(file_exists($p.$pdf)){
		@unlink($p.$pdf);
}
//  Upload pdf
$handle = new Upload($_FILES["pdf"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = "corperate_governmance";
	$handle->Process($p);
		if ($handle->processed) {
			$pdf = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}


updateIRGovDesc($detail,$pdf);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR: Corperate Governmance";
$detail = "Add by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
header("Location:index.php");
?>