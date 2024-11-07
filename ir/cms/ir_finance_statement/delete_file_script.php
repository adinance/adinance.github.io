<?php
require_once "../inc/config_txt.php";
//require_once "../inc/clsConnection.php";
require_once "../../../inc/mysql-command.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
require_once "../inc/functionFinancialStatement.inc.php";
include('../_class/class.upload.php');


$file = trim($_REQUEST["file"]);
$path = trim($_REQUEST["path"]);
$type = $_REQUEST["type"];
$id = $_REQUEST["id"];
$p = "../../data/irfile/statement/pdf/";

if(file_exists($path.$file)){
 @unlink($path.$file);
}

$arr = getStatementDetail(" WHERE id='$id' " );
$pdf1 = $arr[pdf1];
$pdf2 = $arr[pdf2];
$pdf3 = $arr[pdf3];
$pdf4 = $arr[pdf4];
$type_id = $arr[type_id];
$year = $arr[year];
$status = $arr[status];
switch($type){
	case "1" :$pdf1=""; break;
	case "2" :$pdf2=""; break;
	case "3" :$pdf3=""; break;
	case "4" :$pdf4=""; break;
}

editStatement($id,$type_id,$year,$pdf1,$pdf2,$pdf3,$pdf4,$status);
// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Financial Statement ";
$detail = "Delete file ".$file." by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);
echo "success";	
//header("Location:index.php");
?>