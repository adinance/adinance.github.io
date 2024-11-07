<?php
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
require_once "../inc/functionIRSET.inc.php";
setlocale(LC_ALL, 'TH');
$path =  $_SERVER['HTTP_REFERER'];
if(isset($_POST['id'])){
		foreach($_POST['id'] as $index=>$value){
			if($value != ""){	
				deleteIRSET($value);
			}
		}
}
$section = "IR:SET Info.";
$detail = "Delete  by ".$_SESSION["s_admin_username"];
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location: index.php");	
?>