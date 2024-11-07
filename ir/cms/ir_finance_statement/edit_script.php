<?php
require_once "../inc/config_txt.php";
//require_once "../inc/clsConnection.php";
require_once "../../../inc/mysql-command.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionFinancialStatement.inc.php";
//include('../_class/class.upload.php');
require_once "../../../lib/upload/class.upload.php";


$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$pdf1 = $_REQUEST["old_pdf1"];
$pdf2 = $_REQUEST["old_pdf2"];
$pdf3 = $_REQUEST["old_pdf3"];
$pdf4 = $_REQUEST["old_pdf4"];

$id = $_REQUEST["id"];
$p = "../../../data/irfile/statement/pdf/";

if(!empty($_FILES["pdf1"]["tmp_name"])){
if(file_exists($p.$pdf1)){
 @unlink($p.$pdf1);
}
	
$handle = new Upload($_FILES["pdf1"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = $type_id."_yearly_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf1 = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

if(!empty($_FILES["pdf2"]["tmp_name"])){
if(file_exists($p.$pdf2)){
 @unlink($p.$pdf2);
}
$handle = new Upload($_FILES["pdf2"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = $type_id."_q3_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf2 = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}
if(!empty($_FILES["pdf3"]["tmp_name"])){
if(file_exists($p.$pdf3)){
 @unlink($p.$pdf3);
}
$handle = new Upload($_FILES["pdf3"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = $type_id."_q2_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf3 = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}
if(!empty($_FILES["pdf4"]["tmp_name"])){
if(file_exists($p.$pdf4)){
 @unlink($p.$pdf4);
}
$handle = new Upload($_FILES["pdf4"]);
	if ($handle->uploaded) {
	$handle->file_new_name_body   = $type_id."_q1_".$id;
	$handle->Process($p);
		if ($handle->processed) {
			$pdf4 = $handle->file_dst_name;
		  	$handle-> Clean();
		} 
	} 
}

editStatement($id,$type_id,$year,$pdf1,$pdf2,$pdf3,$pdf4,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Financial Statement";
$detail = "Edit by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
	
header("Location:index.php");
?>