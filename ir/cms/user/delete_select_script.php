<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";
setlocale(LC_ALL, 'TH');
$path =  $_SERVER['HTTP_REFERER'];
if(isset($_POST['id'])){
		foreach($_POST['id'] as $index=>$value){
			if($value != ""){
			   delete_user($value);   
			}
		}
		
	}
$section = "Administrator";
$detail = "cms :Delete permission";
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);	
header("Location:".$path);	
?>