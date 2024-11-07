<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";
$path =  "../logout.php"; //$_SERVER['HTTP_REFERER'];
$hash = "ux01kt53";
$user_id = trim($_POST["id"]);
$password = trim($_POST["password"]);
$password = md5($password.$hash);
if(changePassword($user_id,$password)){
$section = "Administrator";
$detail = "cms :change password";
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location:".$path);	
}else{
header("Location: index.php");		
}
?>
